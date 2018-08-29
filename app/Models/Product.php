<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $table = 'products';

	public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id', 'id');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Models\ProductCategory', 'products_categories_products', 'product_id', 'product_category_id');
    }

}