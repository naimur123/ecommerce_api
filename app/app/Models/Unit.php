<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name','short_name','remarks','Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

    ];
    public $timestamps = false;
}
