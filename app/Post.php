<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table= 'posts';
    protected $fillable=['title','contents','tags',];
    protected $casts = ['tags'=>'array'];

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}

