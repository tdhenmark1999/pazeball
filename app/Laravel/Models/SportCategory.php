<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SportCategory extends Model
{
    use SoftDeletes;
    protected $fillable =  ['name','description'];
}
