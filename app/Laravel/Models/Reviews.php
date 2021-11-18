<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $fillable = ["description","rate","review_by","review_for"];

    public function User(){
        return $this->hasMany("App\Laravel\Models\User","review_by","uuid");
    }
}
