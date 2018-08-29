<?php

namespace App\Services;

use App\Models\ProductImage;

class ProductsImagesService
{

	public static function create($data)
	{
		$image = new ProductImage();

		$image->product_id = $data['product_id'];
		$image->url = $data['url'];

		$image->save();

		return $image;
	}

}