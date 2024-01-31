<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailAfterCreatingPostJob;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('welcome', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.detail')->with(['post' => $post]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:2|max:100',
            'body' => 'required|min:2|max:1000',
        ]);

        Post::create($data);

        // $userEmail = auth()->user()->email; // need register user

        //* WITHOUT QUEUE
        // Mail::to('posts@app.com')->send(new PostCreated());

        //* QUEUE
        // dispatch(new SendEmailAfterCreatingPostJob());

        return redirect()->route('index')->with('message', 'Post created');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:2|max:100',
            'body' => 'required|min:2|max:1000',
        ]);

        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('index')->with('message', 'Post updated');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('index')
        ->with('success', 'Post deleted successfully');
    }
}
