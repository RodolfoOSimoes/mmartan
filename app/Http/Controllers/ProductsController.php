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
		$page = (int)$page;
		$count = (int)$count;
		$filter = $this->request->get('filter', '');
		$products = null;
		$total = null;

		try {
			$products = ProductsService::search($filter, $page, $count, true);
			$total = ProductsService::searchCount($filter);
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
			'pagination' => [
				'page' => $page,
				'count' => $count,
				'total' => $total
			]
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
