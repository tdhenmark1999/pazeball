<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        "type",
        "user_id",
        "pazerp_id",
        "date",
        "time",
        "address",
        "remarks"
    ];



    public function users(){
     return $this->hasMany('App\laravel\Models\User','uuid','user_id');
    }
}
