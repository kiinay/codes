<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function show() {
    $posts = Post::all();

    return view('post.index', compact('posts'));
  }
}
