<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Parameters extends Model
{
    protected $table = 'parameters';

    protected $fillable = ["title","value","description"];
}
