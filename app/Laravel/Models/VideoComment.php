<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    protected $fillable = ['user_id','video_uuid','comment'];
}
