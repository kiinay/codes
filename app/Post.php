<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //
  protected $fillable = [
      'user_id',
      'category_id',
      'title',
      'content',
      'published_at',
      'status'
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function category() {
    return $this->belongsTo('App\Category');
  }

  public function comments() {
    return $this->hasMany('App\Comment');
  }

  public function tags() {
    return $this->belongsToMany('App\Tag');
  }

  public function media() {
    return $this->belongsTo('App\Media');
  }
}
