<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupAccess extends Model
{
    protected $fillable = [
        'group_id','group_access','createdate', 'modifieddate',

    ];
    public $timestamps = false;
}
