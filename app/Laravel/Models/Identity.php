<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    protected $fillable = [

                    "curriculum_vitae_full_path",
                    "directory",
                    "first_back_id_full_path",
                    "first_front_id_full_path",
                    "first_id_number",
                    "first_id_type",
                    "path",
                    "second_back_id_full_path",
                    "second_front_id_full_path",
                    "second_id_number",
                    "second_id_type",
                    "status",
                    "user_id"
                        ];



}
