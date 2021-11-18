<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [];

    public function details(){
        return $this->hasOne("App\Laravel\Models\TransactionDetail","transaction_id","transaction_id");
    }
}
