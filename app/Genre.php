<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
