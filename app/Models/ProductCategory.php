<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

	protected $table = 'products_categories';

    public function products()
    {
    	return $this->belongsToMany('App\Models\Product', 'products_categories_products', 'product_category_id', 'product_id');
    }

}