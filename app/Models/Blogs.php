<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $casts = [
        "publication_status" => "boolean",
    ];

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, "created_by")->withTrashed();
    }
    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, "updated_by")->withTrashed();
    }
    public function admin(){
        return $this->belongsTo(Admin::class, "admin_id")->withTrashed();
    }
    public $timestamps = false;
}
