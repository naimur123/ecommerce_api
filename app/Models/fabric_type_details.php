<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric_type_details extends Model
{
    protected $fillable = [
        'fabric_type_id','details','price','unit_id','qty','color_id','createby', 'createdate', 'modifiedby', 'modifieddate',

    ];
    public $timestamps = false;
}
