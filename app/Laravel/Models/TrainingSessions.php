<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSessions extends Model
{
    // protected $table = "training_se";
    protected $fillable =[];

    public function engagements(){
        return $this->hasMany("App\Laravel\Models\Engaged","training_id","training_id");
    }

    public function training(){
        return $this->belongsTo("App\Laravel\Models\Training","training_id","uuid");
    }

}
