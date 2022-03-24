<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name','color_img','remarks','status_id','createby', 'createdate', 'modifiedby', 'modifieddate',

    ];
    public $timestamps = false;
}
