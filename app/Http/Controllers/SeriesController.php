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
      $all_series = Series::all();
      return view('series.index', compact('all_series'));
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
      if (request('topic')) {
        $args['topic_id'] = request('topic');
      }
      Series::create($args);
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

      // $url = $series->url;
      // $all_files = File::allFiles($url);
      // var_dump($all_files);
        return view('series.show', compact('series'));
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
      if (request('topic')) {
        $series->topic_id = request('topic');
      }
      $series->save();
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
      return back();
    }

    public function generate_videos(Series $series)
    {
        // delete all 
      Video::where('series_id', $series->id)->delete();
        // now add all
      $url = $series->url;
      $all_files = File::allFiles($url);
      foreach ($all_files as $file) {
        Video::create([
          'relative_path' => $file->relativePath,
          'relative_path_name' => $file->relativePathname,
          'path_name' => $file->pathName,
          'file_name' => $file->fileName,
          'series_id' => $series->id,
        ]);
      }
      back()->withMessage('Generate Videos Successfully');
    }
  }
