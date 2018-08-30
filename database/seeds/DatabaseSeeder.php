<?php

use Illuminate\Database\Seeder;
use App\Services\ProductsService;
use App\Services\ProductsImagesService;
use App\Services\ProductsCategoriesService;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	/**
    	 * Cadastro de produtos.
    	 */

		ProductsService::create([
			'name' => 'Toalha One for All',
			'old_price' => '79.00',
			'price' => '59.00'
		]);

		ProductsService::create([
			'name' => 'Travesseiro Toque de Pluma',
			'old_price' => '189.00',
			'price' => '149.00'
		]);

		ProductsService::create([
			'name' => 'Jogo de Toalha Tradicional Fio Egípcio',
			'old_price' => '590.00',
			'price' => '479.00'
		]);

		ProductsService::create([
			'name' => 'Bandeja Exuberante Metal com Pedraria',
			'old_price' => '229.00',
			'price' => '179.00'
		]);

		ProductsService::create([
			'name' => 'Jogo de Lençol Petit Baby Bordado Inglês',
			'old_price' => '379.00',
			'price' => '299.00'
		]);

		ProductsService::create([
			'name' => 'Travesseiro Nasa Light',
			'old_price' => '149.00',
			'price' => '119.00'
		]);

		ProductsService::create([
			'name' => 'Enchimento para Almofada Conforto',
			'old_price' => '39.00',
			'price' => '29.00'
		]);

		ProductsService::create([
			'name' => 'Kit Cama Cibeles Cetim Fio Egípcio',
			'old_price' => '.00',
			'price' => '.00'
		]);

		ProductsService::create([
			'name' => 'Aromatizador de Ambiente Bamboo',
			'old_price' => '159.00',
			'price' => '129.00'
		]);

		ProductsService::create([
			'name' => 'Aromatizador de Ambiente England',
			'old_price' => '99.00',
			'price' => '79.00'
		]);


		ProductsService::create([
			'name' => 'Kit Colcha Petit Girl Dupla Face',
			'old_price' => '369.00',
			'price' => '259.00'
		]);

		ProductsService::create([
			'name' => 'Jogo de Lençol Petit Baby Fio Egípcio Bordado',
			'old_price' => '379.00',
			'price' => '299.00'
		]);

		ProductsService::create([
			'name' => 'Kit colcha Petit Girl Dupla Face Matelado',
			'old_price' => '339.00',
			'price' => '259.00'
		]);

		ProductsService::create([
			'name' => 'Kit Colcha Petit Boy Dupla Face Matelado',
			'old_price' => '339.00',
			'price' => '259.00'
		]);

		ProductsService::create([
			'name' => 'Kit colcha Petit Girl Dupla Face Matelado',
			'old_price' => '339.00',
			'price' => '259.00'
		]);

		ProductsService::create([
			'name' => 'Kit Cama Luna Twill Algodão Egípcio',
			'old_price' => '1690.00',
			'price' => '1190.00'
		]);

		ProductsService::create([
			'name' => 'Manta One for All Flannel Aveludado',
			'old_price' => '189.00',
			'price' => '149.00'
		]);

		ProductsService::create([
			'name' => 'Manta One for All Flannel Aveludado',
			'old_price' => '189.00',
			'price' => '149.00'
		]);

		ProductsService::create([
			'name' => 'Manta Easy Mix Detalhes em Relevo',
			'old_price' => '249.00',
			'price' => '179.00'
		]);

		ProductsService::create([
			'name' => 'Manta Toledo Aveludado Flannel',
			'old_price' => '249.00',
			'price' => '179.00'
		]);

    	/**
    	 * Cadastro de imagens produtos.
    	 */

    	ProductsImagesService::create([
    		'product_id' => 1,
    		'url' => '/img/1/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 1,
    		'url' => '/img/1/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 1,
    		'url' => '/img/1/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 1,
    		'url' => '/img/1/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 2,
    		'url' => '/img/2/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 2,
    		'url' => '/img/2/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 2,
    		'url' => '/img/2/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 2,
    		'url' => '/img/2/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 3,
    		'url' => '/img/3/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 3,
    		'url' => '/img/3/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 3,
    		'url' => '/img/3/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 3,
    		'url' => '/img/3/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 4,
    		'url' => '/img/4/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 4,
    		'url' => '/img/4/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 4,
    		'url' => '/img/4/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 4,
    		'url' => '/img/4/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 5,
    		'url' => '/img/5/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 5,
    		'url' => '/img/5/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 5,
    		'url' => '/img/5/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 5,
    		'url' => '/img/5/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 6,
    		'url' => '/img/6/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 6,
    		'url' => '/img/6/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 6,
    		'url' => '/img/6/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 6,
    		'url' => '/img/6/4.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 7,
    		'url' => '/img/7/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 7,
    		'url' => '/img/7/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 7,
    		'url' => '/img/7/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 7,
    		'url' => '/img/7/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 8,
    		'url' => '/img/8/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 8,
    		'url' => '/img/8/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 8,
    		'url' => '/img/8/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 8,
    		'url' => '/img/8/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 9,
    		'url' => '/img/9/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 9,
    		'url' => '/img/9/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 9,
    		'url' => '/img/9/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 9,
    		'url' => '/img/9/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 10,
    		'url' => '/img/10/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 10,
    		'url' => '/img/10/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 10,
    		'url' => '/img/10/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 10,
    		'url' => '/img/10/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 11,
    		'url' => '/img/11/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 11,
    		'url' => '/img/11/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 11,
    		'url' => '/img/11/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 11,
    		'url' => '/img/11/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 12,
    		'url' => '/img/12/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 12,
    		'url' => '/img/12/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 12,
    		'url' => '/img/12/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 12,
    		'url' => '/img/12/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 13,
    		'url' => '/img/13/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 13,
    		'url' => '/img/13/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 13,
    		'url' => '/img/13/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 13,
    		'url' => '/img/13/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 14,
    		'url' => '/img/14/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 14,
    		'url' => '/img/14/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 14,
    		'url' => '/img/14/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 14,
    		'url' => '/img/14/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 15,
    		'url' => '/img/15/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 15,
    		'url' => '/img/15/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 15,
    		'url' => '/img/15/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 15,
    		'url' => '/img/15/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 16,
    		'url' => '/img/16/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 16,
    		'url' => '/img/16/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 16,
    		'url' => '/img/16/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 16,
    		'url' => '/img/16/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 17,
    		'url' => '/img/17/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 17,
    		'url' => '/img/17/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 17,
    		'url' => '/img/17/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 17,
    		'url' => '/img/17/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 18,
    		'url' => '/img/18/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 18,
    		'url' => '/img/18/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 18,
    		'url' => '/img/18/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 18,
    		'url' => '/img/18/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 19,
    		'url' => '/img/19/1.jpg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 19,
    		'url' => '/img/19/2.jpg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 19,
    		'url' => '/img/19/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 19,
    		'url' => '/img/19/2.jpg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 20,
    		'url' => '/img/20/1.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 20,
    		'url' => '/img/20/2.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 20,
    		'url' => '/img/20/3.jpeg'
    	]);

    	ProductsImagesService::create([
    		'product_id' => 20,
    		'url' => '/img/20/3.jpeg'
    	]);

        /**
         * Cadastro de categorias produtos.
         */

        ProductsCategoriesService::create([
            'name' => 'Cama'
        ]);

        ProductsCategoriesService::create([
            'name' => 'Banho'
        ]);

        ProductsCategoriesService::create([
            'name' => 'Solteiro Extra'
        ]);

        ProductsCategoriesService::create([
            'name' => 'Infantil'
        ]);

        /**
         *  Adicionar categorias aos produtos.
         */

        ProductsService::addCategory(1, 1);
        ProductsService::addCategory(1, 3);

        ProductsService::addCategory(2, 2);
        ProductsService::addCategory(2, 4);

        ProductsService::addCategory(3, 2);
        ProductsService::addCategory(3, 3);

        ProductsService::addCategory(4, 1);
        ProductsService::addCategory(4, 3);

        ProductsService::addCategory(5, 2);
        ProductsService::addCategory(5, 4);

        ProductsService::addCategory(6, 2);
        ProductsService::addCategory(6, 3);

        ProductsService::addCategory(7, 1);
        ProductsService::addCategory(7, 4);

        ProductsService::addCategory(8, 1);
        ProductsService::addCategory(8, 3);

        ProductsService::addCategory(9, 1);
        ProductsService::addCategory(9, 4);

        ProductsService::addCategory(10, 2);
        ProductsService::addCategory(10, 3);

        ProductsService::addCategory(11, 2);
        ProductsService::addCategory(11, 4);

        ProductsService::addCategory(12, 1);
        ProductsService::addCategory(12, 3);

        ProductsService::addCategory(13, 1);
        ProductsService::addCategory(13, 4);

        ProductsService::addCategory(14, 2);
        ProductsService::addCategory(14, 4);

        ProductsService::addCategory(15, 1);
        ProductsService::addCategory(15, 3);        

        ProductsService::addCategory(16, 1);
        ProductsService::addCategory(16, 4);

        ProductsService::addCategory(17, 1);
        ProductsService::addCategory(17, 4);

        ProductsService::addCategory(18, 2);
        ProductsService::addCategory(18, 3);

        ProductsService::addCategory(19, 2);
        ProductsService::addCategory(19, 4);

        ProductsService::addCategory(20, 1);
        ProductsService::addCategory(20, 4);

    }
}
