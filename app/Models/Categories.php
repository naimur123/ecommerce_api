<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{


    protected $fillable = [
        'category_name','category_details','remarks', 'Createby','status_id', 'Createdate', 'Modifiedby', 'Modifieddate',

    ];
    public $timestamps = false;
}
