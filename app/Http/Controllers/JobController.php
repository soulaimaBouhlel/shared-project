<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return view('posts.index', [
            'jobs' => Job::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(18)->withQueryString()
        ]);
    }
//    public function create()
//    {
//        return view('admin.posts.create');
//    }
//
//    public function store()
//    {
//        Post::create(array_merge($this->validatePost(), [
//            'user_id' => request()->user()->id,
//            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
//        ]));
//
//        return redirect('/');
//    }
//
//    public function edit(Post $post)
//    {
//        return view('admin.posts.edit', ['post' => $post]);
//    }
//
//    public function update(Post $post)
//    {
//        $attributes = $this->validatePost($post);
//
//        if ($attributes['thumbnail'] ?? false) {
//            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
//        }
//
//        $post->update($attributes);
//
//        return back()->with('success', 'Post Updated!');
//    }
//
//    public function destroy(Post $post)
//    {
//        $post->delete();
//
//        return back()->with('success', 'Post Deleted!');
//    }
//
//    protected function validatePost(?Post $post = null): array
//    {
//        $post ??= new Post();
//
//        return request()->validate([
//            'title' => 'required',
//            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
//            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
//            'excerpt' => 'required',
//            'body' => 'required',
//            'category_id' => ['required', Rule::exists('categories', 'id')]
//        ]);
//    }
}
