<?php

namespace App\Services;

use App\Models\ProductCategory;

class ProductsCategoriesService
{

	public static function create($data)
	{
		$category = new ProductCategory();

		$category->name = $data['name'];
		$category->slug = str_slug($data['name'], '-');

		$category->save();

		return $category;
	}

}