<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = [
        'name','image','remarks','country_id','status_id', 'Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

    ];
    public $timestamps = false;
}
