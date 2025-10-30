<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user', 'post')->get();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        $users = User::all();
        $posts = Post::all();
        return view('comments.create', compact('users', 'posts'));
    }

    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect()->route('comments.index');
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        $users = User::all();
        $posts = Post::all();
        return view('comments.edit', compact('comment', 'users', 'posts'));
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect()->route('comments.index');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
