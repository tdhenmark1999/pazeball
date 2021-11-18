<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class IdType extends Model
{
    protected $table = 'id_type';

    protected $fillable = ["code","name"];
}
