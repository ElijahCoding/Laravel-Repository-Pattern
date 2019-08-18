<?php

namespace App;

use App\Post;
use App\Traits\Eloquent\HasLive;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasLive;

    protected $fillable = [
        'user_id', 'title', 'slug'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
