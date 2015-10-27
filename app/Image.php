<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
      'post_id',
      'file_name',
      'size'
  ];

  public function post() {
    return $this->belongsTo('App\Post');
  }
}
