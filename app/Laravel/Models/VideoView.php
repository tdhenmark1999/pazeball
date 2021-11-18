<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class VideoView extends Model
{
    protected $fillable = ['user_id','video_id'];
}
