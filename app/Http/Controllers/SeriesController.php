<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Models\Topic;
use App\Models\Video;
use File;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Illuminate\Support\Str;


class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $all_series = Series::query()
                    ->with('topics')
                    ->where('hidden', 0)
                    ->latest()
                    ->paginate(15);

      $query      = false;
      if (request('query')) {
        $query = request('query');
        $all_series = Series::query()
                              ->with('topics')
                              ->where('url', 'LIKE', "%$query%")
                              ->where('hidden', 0)
                              ->latest()->paginate(15);
      }
      return view('series.index', compact('all_series', 'query'));
    }

    public function index_hidden()
    {
      $query = '';
      $all_series = Series::with('topics')->where('hidden', 1)->latest()->paginate(15);
      return view('series.index', compact('all_series', 'query'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $topics = Topic::all();
      return view('series.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'url' => 'required',
      ]);
      $args = [
        'title' => request('title'),
        'url' => request('url'),
      ];
      $series = Series::create($args);
      if (request('topic')) {
        $topic_ids = request('topic');
        $series->topics()->attach($topic_ids);
      }
      return back()->withMessage('Added successfully');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
    {
      return view('series.show', compact('series'));
    }

    public function backup()
    {
        echo "<div style='margin: 10px; padding: 10px; border: 1px solid #ddd;'> <div class='card-body'>";
          echo "__extension__" . $extension . "<br>";
          echo "__path_name__" . $path_name . "<br>";
          echo "__file_name__" . $file_name  . "<br>";
          echo "__file_name__ext" . $file_name_without_extension  . "<br>";
          echo "__p__" . $file->getPath() . "<br>";
        echo "</div></div>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit(Series $series)
    {
      $topics = Topic::all();
      return view('series.edit', compact('topics', 'series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Series $series)
    {

      $this->validate($request, [
        'title' => 'required',
        'url' => 'required',
      ]);
      $series->title = request('title');
      $series->url = request('url');
      $series->hidden = request('hidden');
      $series->save();

      $series->topics()->detach();
      if (request('topic')) {
        $topic_ids = request('topic');
        $series->topics()->attach($topic_ids);
      }
      return redirect()->route('series.edit', $series)->withMessage('Updated  successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $series)
    {
      $series->delete();
      return redirect()->route('series.index');
    }
    public function generate_video_args(Series $series, $allowed_extension = ['mp4', 'avi', 'mov', 'm4v', 'mkv', 'webm', 'pdf',])
    {
      $url               = $series->url;
      if (! File::exists($url)) {
        return false;
      }
      $series_id         = $series->id;
      $files             = File::allFiles($url);
      $files             = array_filter($files, function ($file) use($allowed_extension) {
        $extension =  $file->getExtension();
        $extension = strtolower($extension);
        return in_array($extension, $allowed_extension);
      });

      // most helpful sorting option for me
      usort($files, function($a, $b) {
        return strnatcmp($a->getPathname(), $b->getPathname());
      });

      $video_table_args = [];

      $no_of_videos = count($files);
      foreach ($files as $index => $file) {
        $extension = $file->getExtension() ;
        $file_type = $extension == 'pdf' ? 'pdf' : 'video';
        $path_name = $file->getPathname() ;
        $file_name = $file->getFilename() ;
        $extension_with_dot = ".{$extension}";
        $file_name_without_extension = basename($path_name, $extension_with_dot);
        $video_table_args[] = [
          'extension' => $extension,
          'path_name' => $path_name,
          'file_type' => $file_type,
          'file_name' => $file_name,
          'file_name_without_extension' => $file_name_without_extension,
          'slug' => 'video-no--' . ($index+1) . '-of-'. $no_of_videos . '--' . Str::slug($file_name_without_extension) .  '-' . Str::random(8),
          'series_id' => $series_id,
        ];

      }
      return $video_table_args;
    }

    public function generate_videos(Series $series)
    {
        // delete all
      Video::where('series_id', $series->id)->delete();
        // now add all
      $video_table_args = $this->generate_video_args($series);
      if (! $video_table_args) {
        return 'Path not found ';
      }
      Video::insert($video_table_args);

      return back()->withMessage('Generate Videos Successfully');
    }
    public function delete_videos(Series $series) {
      Video::where('series_id', $series->id)->delete();
      return back()->withMessage('Remove videos successfully');
    }


    public function series_video_merge(Series $series)
    {
        // Unlink Output video
        // now add all
      $video_table_args = $this->generate_video_args($series, ['mp4', 'avi', 'mov']);
      $output_file = "full-video-". $series->slug . ".mp4";
      // return $video_table_args;
      if (! $video_table_args) {
        return 'Path not found ';
      }
      $video_paths = [];
      foreach ($video_table_args as $single_file) {
        $video_paths[] = "file://" . $single_file['path_name'];
      }
      FFMpeg::openUrl( $video_paths )
      ->export()
      ->concatWithoutTranscoding()
      ->save($output_file);
      // return $video_table_args;
      return back()->withMessage('Merge Videos Successfully');
    }
  }
