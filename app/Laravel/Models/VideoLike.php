<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class VideoLike extends Model
{
    protected $fillable = ["uuid","status","user_id","video_upload_id"];


    public function video(){
        return $this->belongsTo('App\Laravel\Models\Video_upload','id','video_upload_id');
    }
}
