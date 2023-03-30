<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

  /**
   * Display a listing of the resource.
   */
  public function index() {
    $posts = Post::paginate(3);
    return view('post.index', compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    $categories = Category::all();
//    dd($categories->toArray());
    return view('post.create' , compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(PostRequest $request) {
//    dd($request);
    $data = $request->validated();
    Post::create($data);
    return redirect()->route('post.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Post $post) {
    return view('post.show', compact('post'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post) {
    $categories = Category::all();
    return view('post.edit', compact('post', 'categories'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdatePostRequest $request, Post $post) {
    $data = $request->validated();
    $post->update($data);
    return redirect()->route('post.show', $post->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function delete(Post $post) {
    $post->delete();
    return redirect()->route('post.index');
  }

}
