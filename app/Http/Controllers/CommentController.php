<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['redirect' => route('register')]);
        }
    
        // Validate the request
        $request->validate([
            'comment' => 'required',
            'forum_post_id' => 'required|exists:forum_posts,id',
        ]);
    
        // Create a new comment
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = auth()->id(); 
        $comment->forum_post_id = $request->forum_post_id;
        $comment->save();
    
        // Return a JSON response with the comment details
        return response()->json([
            'user_name' => Auth::user()->name,
            'created_at' => now()->format('d/m/Y H:i'),
            'comment' => $comment->comment
        ]);
    }
    
}
