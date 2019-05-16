<?php

namespace App\Http\Controllers;

use App\Series;
use App\Topic;
use App\Video;
use File;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $all_series = Series::where('hidden', 0)->latest()->paginate(15);
      $query      = false;
      if (request('query')) {
        $query = request('query');
        $all_series = Series::where('url', 'LIKE', "%$query%")
                              // ->orWhere('url', 'LIKE', "%$query%" )
                              ->where('hidden', 0)
                              ->latest()->paginate(15);
      }
      return view('series.index', compact('all_series', 'query'));
    }

    public function index_hidden()
    {
      $query = '';
      $all_series = Series::where('hidden', 1)->latest()->paginate(15);
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

      return back()->withMessage('Updated  successfully');
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
    public function generate_video_args(Series $series)
    {
      $url               = $series->url;
      if (! File::exists($url)) {
        return false;
      }
      $series_id         = $series->id;
      $files             = File::allFiles($url);
      $allowed_extension = ['mp4', 'avi', 'mov'];
      $files             = array_filter($files, function ($file) use($allowed_extension) {
        $extension =  $file->getExtension();
        return in_array($extension, $allowed_extension);
      });

      // most helpful sorting option for me
      usort($files, function($a, $b) {
        return strnatcmp($a->getPathname(), $b->getPathname());
      });

      $video_table_args = [];

      foreach ($files as $file) {
        $extension = $file->getExtension() ;
        $path_name = $file->getPathname() ;
        $file_name = $file->getFilename() ;
        $extension_with_dot = ".{$extension}";
        $file_name_without_extension = basename($path_name, $extension_with_dot);
        $video_table_args[] = [
          'extension' => $extension,
          'path_name' => $path_name,
          'file_name' => $file_name,
          'file_name_without_extension' => $file_name_without_extension,
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
  }
