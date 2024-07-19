<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::withCount('videos')->orderBy('created_at')->paginate(30);
        return view('bookmarks.index', compact('bookmarks'));
    }
    public function create()
    {
      return view('bookmarks.create');
    }
     public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
      ]);
      Bookmark::create([
        'title' => request('title'),
      ]);
      return back()->withMessage('Added successfully');
    }
    public function show(Bookmark $bookmark)
    {
      $bookmark->load('videos', 'videos.series');
      return view('bookmarks.show', compact('bookmark'));
    }
    public function destroy(Bookmark $bookmark)
    {
      $bookmark->videos()->detach();
      $bookmark->delete();
      return back();
    }

    public function add_to_bookmark(Bookmark $bookmark)
    {
      $bookmark->videos()->syncWithoutDetaching(request('video_id'));
      return back()->withMessage('Bookmark Added');;
    }
    public function remove_from_bookmark(Bookmark $bookmark)
    {
      $bookmark->videos()->detach(request('video_id'));
      return back()->withMessage('Bookmark Removed');;
    }



}
