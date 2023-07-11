<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
{
    $posts = Post::all();
    return view('post', compact('posts'));
}
public function showSavedPosts()
{
    $savedPosts = auth()->user()->savedPosts;

    return view('saved-posts.index', compact('savedPosts'));
}



}
