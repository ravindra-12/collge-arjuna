<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumLike;
use App\Models\ForumPost;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store($id)
    {
        $post = ForumPost::findOrFail($id);

        if (!$post->likes->where('user_id', Auth::id())->count()) {
            $like = new ForumLike();
            $like->user_id = Auth::id();
            $like->forum_post_id = $post->id;
            $like->save();
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = ForumPost::findOrFail($id);

        $like = ForumLike::where('forum_post_id', $post->id)->where('user_id', Auth::id())->first();
        if ($like) {
            $like->delete();
        }

        return redirect()->back();
    }
}

