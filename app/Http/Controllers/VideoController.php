<?php

namespace App\Http\Controllers;

use App\Series;
use App\Topic;
use App\Video;
use App\VideoStream;
use File;
use Illuminate\Http\Request;
use Response;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::all();
        return view('video.create', compact('topics'));
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
        Video::create($args);
        return back()->withMessage('Added successfully');
    }

    // render video in laravel
    public function render_video(Video $video) {
      $stream = new VideoStream($video->path_name);
      $stream->start();
    }
    public function render_pdf(Video $video) {
      return response()->file($video->path_name);
    }
    public function view_pdf(Video $video)
    {
      $pdf_link = route('render_pdf', $video);
      return view( 'pdfview', compact( 'pdf_link' ) );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {

      $series_id = $video->series_id;
      $previous           = Video::where('series_id', $series_id)->where('id', '<', $video->id)->orderBy('id','desc')->first();
      $next               = Video::where('series_id', $series_id)->where('id', '>', $video->id)->orderBy('id')->first();
      $all_videos         = Video::where('series_id', $series_id)->get();
      $all_videos_count = $all_videos->count();
      if ($video->file_type == 'video') {
        $current_render_link = route('render_video', $video);
      }else {
        $current_render_link = route('render_pdf', $video);
      }

      $data = [
        'all_videos'         => $all_videos,
        'all_videos_count'   => $all_videos_count,
        'next'               => $next,
        'previous'           => $previous,
        'current_video'      => $video,
        'current_render_link' => $current_render_link,
        ];
        return view('video.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return back();
    }
}
