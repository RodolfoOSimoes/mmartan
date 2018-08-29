<?php

namespace App\Services;

use App\Models\Product;

class ProductsService
{

	public static function create($data)
	{
		$product = new Product();

		$product->name = $data['name'];
		$product->old_price = $data['old_price'];
		$product->price = $data['price'];

		$product->save();

		return $product;
	}

	public static function all()
	{
		return Product::all();
	}

	public static function search($filter, $page, $count, $details=false)
	{
		$skip = $count * $page;
		
		$query = Product::where('name', 'like', '%'.$filter.'%')
			->skip($skip)
			->take($count);

		if (true === $details) {
			$query->with(['images', 'categories']);
		}

		return $query->get();
	}

	public static function find($productId)
	{
		return Product::find($productId);
	}

	public static function addCategory($productId, $categoryId)
	{
		$product = self::find($productId);
	
		if (null == $product) {
			return false;
		}

		return $product->categories()->attach($categoryId);
	}

}
