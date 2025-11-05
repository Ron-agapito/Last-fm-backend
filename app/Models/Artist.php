<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'play_count', 'listeners', 'mbid', 'url', 'streamable', 'image',
    ];
}
