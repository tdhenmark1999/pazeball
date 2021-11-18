<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Rewards extends Model
{
    protected $table = 'rewards';

    protected $fillable = [
        "title",
        "status",
        "type",
        "amount",
        "quantity",
        "directory",
        "file_name",
        "full_path",
        "description"
    
    ];
}
