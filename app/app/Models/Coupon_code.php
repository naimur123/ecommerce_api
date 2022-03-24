<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon_code extends Model
{
    protected $fillable = [
        'coupon_code','coupon_amount','remarks','status_id','createby', 'createdate', 'modifiedby', 'modifieddate',

    ];
    public $timestamps = false;
}
