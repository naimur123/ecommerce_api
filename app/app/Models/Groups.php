<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $fillable = [
        'name','description','is_admin','created_by', 'updated_by', 'Createdate', 'Modifieddate',

    ];
    public $timestamps = false;
    protected $casts = [
        "is_admin"  => "boolean",
    ];
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
