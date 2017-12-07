<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
