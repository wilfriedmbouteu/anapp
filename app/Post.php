<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Post extends Model
{
    //
    public function comment()
       {

    return $this->hasMany(Comment::class);
      
      }
      public function user()
       {

    return $this->belongsTo(User::class);
      
      }


}
