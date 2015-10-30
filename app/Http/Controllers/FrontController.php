<?php

namespace App\Http\Controllers;

use App\Category;
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
    $posts = Post::orderBy('published_at', 'desc')->with('category', 'tags', 'comments', 'user')->get();

    return view('post.index', compact('posts'));
  }

  public function showPost($id, $slug='') {
    $post = Post::find($id);

    return view('post.single', compact('post'));
  }

  public function showPostByCategory($id) {
    $posts = Category::find($id)->posts;

    return view('category.index', compact('posts'));
  }

  /****************************************************
   *
   * Request for User views
   *
   ****************************************************/

//  public function deleteUser($id) {
//    $user = User::find($id);
//
//    $user->delete();
//
//    return view('user.index');
//  }

  /****************************************************
   *
   * Request for Categories views
   *
   ****************************************************/

  public function showCategory($id) {
    $category = Category::find($id);
    $posts = Post::where('category_id', '=', $id);

    return view('category.index', compact('category', 'posts'));
  }
}
