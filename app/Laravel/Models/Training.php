<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = "training";
    protected $fillable =[
        "address",
        "amount",
        "capacity",
        "category",
        "city",
        "description",
        "directory",
        "file_name",
        "full_path",
        "introduction",
        "path",
        "session",
        "status",
        "thumb_path",
        "title",
        "type",
        "user_id",
        "zip_code",
        "url_training"
    ];


    public function sessions(){
        return $this->hasMany("App\Laravel\Models\TrainingSessions","training_id","uuid");
    }
}
