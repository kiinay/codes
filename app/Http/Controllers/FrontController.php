<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function show($id, $slug='')
    {
      return Str::slug($slug);
    }
}
