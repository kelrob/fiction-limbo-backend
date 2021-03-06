<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAsset extends Model
{
    protected $table = 'post_assets';
    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
