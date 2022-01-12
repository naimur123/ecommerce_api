<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generic_status extends Model
{
    protected $fillable = [
        'name', 'short_name', 'Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

    ];
    public $timestamps = false;
}
