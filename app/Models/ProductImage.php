<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

	protected $table = 'products_images';

	public function product()
	{
	    return $this->belongsTo('App\Models\Product', 'id', 'product_id');
	}

}