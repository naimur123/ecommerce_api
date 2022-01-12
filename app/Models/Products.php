<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'category_id','brand_id','product_name','product_slug','product_code','product_quantity','short_description','long_description','price','image_one','image_two',
        'image_three', 'Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

        ];
        public $timestamps = false;

}
