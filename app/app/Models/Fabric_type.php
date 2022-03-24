<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric_type extends Model
{
    protected $fillable = [
        'name','remarks','status_id','createby', 'createdate', 'modifiedby', 'modifieddate',

    ];
    public $timestamps = false;
}
