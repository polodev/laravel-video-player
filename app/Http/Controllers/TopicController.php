<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $topics = Topic::orderBy('title')->paginate(15);
      $topics = Topic::where(function($query) {
        $query->has('series');
      })->orderBy('title')->paginate(30);


      $tquery      = false;
      if (request('tquery')) {
        $tquery = request('tquery');
        $topics = Topic::where('title', 'LIKE', "%$tquery%")
        ->orderBy('title')->paginate(15);
      }
      return view('topic.index', compact('topics', 'tquery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('topic.create');
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
      ]);
      Topic::create([
        'title' => request('title'),
      ]);
      return back()->withMessage('Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
      $paginate_series = $topic->series()->latest()->paginate(15);
      return view('topic.show', compact('topic', 'paginate_series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
      $topic->delete();
      return back();
    }
  }
