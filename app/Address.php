<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'line1'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
