<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::where('is_active', true)->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => ['required', 'string'],
        ]);

        Post::create([
            'title' => $data['title'],
            'content' => $data['content']
        ]);

        return redirect()->route('posts.index');
    }

    public function show($post)
    {
        // $post = Post::where('id', $post)->first();
        $post = Post::find($post);

        return view('posts.show', compact('post'));
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully.');
    }

    public function edit($post)
    {
        $post = Post::find($post);

        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, $post)
    {
        $post = Post::find($post);

        $data = $request->validated();

        $post->update([
            'title' => $data['title'],
            'content' => $data['content'],
        ]);

        return redirect()->route('posts.show', $post->id)->with('success', 'Post Updated Successfully');
    }
}
