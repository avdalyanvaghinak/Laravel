<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{


    protected $fillable = [
        'user_id', 'images','text','date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
