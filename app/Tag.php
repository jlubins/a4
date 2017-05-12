<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function forumPosts() {
      return $this->belongsToMany('App\ForumPost')->withTimestamps();
  }
}
