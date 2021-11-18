<?php

namespace App\Laravel\Models;
use Illuminate\Database\Eloquent\Model;

class Video_upload extends Model
{
    protected $fillable = [];

    public function user(){
		return $this->belongsTo('App\Laravel\Models\User','user_id','id')->select(['id', 'first_name','last_name']);
	}

 protected   $appends = ['total_likes','total_views'];

  public function getTotalLikesAttribute(){
  return $this->hasMany('App\Laravel\Models\VideoLike','video_uploaded_id','uuid')->count();
}
public function getTotalViewsAttribute(){
  return $this->hasMany('App\Laravel\Models\VideoView','video_id','uuid')->count();
}

  public function likes(){
    return $this->hasMany('App\Laravel\Models\VideoLike','video_uploaded_id','uuid')->select(['video_uploaded_id','user_id']);
  }
  public function comments(){
    return $this->hasMany('App\Laravel\Models\VideoComment','video_uuid','uuid');
  }
  
}
