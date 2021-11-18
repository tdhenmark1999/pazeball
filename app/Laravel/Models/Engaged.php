<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Engaged extends Model
{
protected $table = "engaged";
protected $fillable = [];

public function sessions(){
    $this->belongsTo("App\Laravel\Models\TrainingSessions","uuid","training_id");
}
}
