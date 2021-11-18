<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
  use SoftDeletes;
    protected $table = "certificate";
    protected $fillable = [
    'directory',
    'filename',
    'full_path',
    'is_show',
    'user_id',
    'month',
    'path',
    'title',
    'year',
    'city',
    'country'
    ];


    public function user(){
		return $this->belongsTo('App\Laravel\Models\User','user_id','id');
	}
}

