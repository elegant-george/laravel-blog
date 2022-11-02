<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class UserPostController extends Controller
{
    public function index()
    {
        return view('user.posts.index', [
            'posts' => Post::where('user_id', auth()->id())->get()
        ]);
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {

        $attributes = array_merge($this->validatePost(), [
            'user_id' => auth()->id(),
        ]);

        Post::create($attributes);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('user.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        $post->update($attributes);

        back();
        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted');
    }

    protected function validatePost(?Post $post = null): array
    {

        $post ??= new Post();
        return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'body' => 'required'
        ]);
    }

}
