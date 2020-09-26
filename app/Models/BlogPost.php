<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
   // protected $table = 'blogposts';

     protected $fillable = ['title' , 'short_content' , 'content'];

     public function comments(){

         return $this->hasMany('App\Models\Comment');
     }
}
