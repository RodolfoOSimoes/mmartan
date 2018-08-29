<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductsService;

class ProductsController extends Controller
{

	private $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function search($page = 0, $count = 10)
	{
		$filter = $this->request->get('filter');
		$products = null;

		try {
			$products = ProductsService::search($filter, $page, $count, true);
		} catch(\Exception $e) {
			return [
				'status' => 'error',
				'message' => $e->getMessage()
			];
		}

		return [
			'status' => 'success',
			'data' => $products->toArray(),
			'filter' => $filter,
			'pagintaion' => []
		];		
	}

	public function all()
	{
		$products = null;

		try {
			$products = ProductsService::all();
		} catch(\Exception $e) {
			return [
				'status' => 'error',
				'message' => $e->getMessage()
			];
		}

		return [
			'status' => 'success',
			'data' => $products->toArray()
		];
	}
}
