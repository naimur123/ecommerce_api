<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'category_id','subcat_id','brand_id','name','slug','code','quantity','unit_id','short_description','long_description','price','discount_price','discount_percentage','currency_id','image_one','image_two',
        'image_three', 'Createby', 'Createdate', 'Modifiedby', 'Modifieddate',

        ];
        public $timestamps = false;


}
