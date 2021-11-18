<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Wallet extends Model
{
    use SoftDeletes;
    protected $table = "wallet";
    protected $fillable = [];
}
