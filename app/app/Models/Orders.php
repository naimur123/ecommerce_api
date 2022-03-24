<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_id','total_price','discount','sub_total','order_date','status_id', 'remarks','modifiedby', 'modifieddate',

    ];
    public $timestamps = false;
}
