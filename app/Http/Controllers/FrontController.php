<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FrontController extends Controller
{
  /****************************************************
   *
   * Request for Home views
   *
   ****************************************************/

  public function show() {
    $posts = Post::orderBy('published_at', 'desc')->with('category', 'tags', 'comments')->paginate(10);

    return view('home.index', compact('posts'));
  }

  /****************************************************
   *
   * Request for Post views
   *
   ****************************************************/

  public function showAll() {
    $posts = Post::all();

    return view('post.index', compact('posts'));
  }

  public function showPost($id, $slug='') {
    $post = Post::find($id);

    return view('post.single', compact('post'));
  }

  /****************************************************
   *
   * Request for User views
   *
   ****************************************************/

  public function showUsers() {
    $users = User::all();

    return view('user.index', compact('users'));
  }

  public function showUser($id) {
    $user = User::find($id);

    return view('user.single', compact('user'));
  }

  public function createUser() {
    return view('user.create');
  }

  public function userCreated(Requests\UserFormRequest $request) {
    dd($request->all());
  }
}
