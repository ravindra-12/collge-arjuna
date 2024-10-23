<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    // Show the form for creating a new post
    public function create()
    {
        return view('forum_posts.create');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        $request->validate([
            'postcontent' => 'required|string|max:5000',
        ]);

        $post = new ForumPost();
        $post->postcontent = $request->postcontent;
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('blogdetails.show', $post->id)
            ->with('success', 'Post created successfully.');
    }

    // Display the specified post
    public function show($id)
    {
        $post = ForumPost::with('user')->findOrFail($id);
        // dd($post);
        return view('forum_posts.show', compact('post'));
    }

    public function ForumPost(){
        $allpost = ForumPost::all();
    //   dd($allpost);
        return view('forum_posts.forumpost', compact('allpost'));
    }

  public function forumdetails($id){
    $post = ForumPost::with('user')->findOrFail($id);
//   dd($post);
   return view('forum_posts.forumpostdetails', compact('post'));
  }


}
