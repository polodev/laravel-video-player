<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::orderBy('created_at')->paginate(30);
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
      return view('bookmarks.show', compact('bookmark'));
    }
    public function destroy(Bookmark $bookmark)
    {
      $bookmark->delete();
      return back();
    }



}
