<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Recurring extends Model
{
    protected $table = "recurring";
    protected $fillable = [
                           "amount",
                           "auth_code",
                           "feed_back",
                           "first_payment_date",
                           "in_active",
                           "ref_no",
                           "signature",
                           "status",
                           "subscription_no",
                           "trans_id",
                           "transaction_no",
                           "user_id",
    ];
}
