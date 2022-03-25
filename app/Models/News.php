<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'name','details','image','remarks','event_date', 'status_id', 'Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

    ];
    public $timestamps = false;
}
