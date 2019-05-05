<?php
 
use App\Product; 
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => '2499',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda modi, fugiat laboriosam aspernatur sed reprehenderit eaque!',

        ]);


        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 512GB SSD, 16GB RAM',
            'price' => '1499',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda modi, fugiat laboriosam aspernatur sed reprehenderit eaque!',

        ]);


        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 256GB SSD, 8GB RAM',
            'price' => '1299',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda modi, fugiat laboriosam aspernatur sed reprehenderit eaque!',

        ]);


        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '13 inch, 512GB SSD, 16GB RAM',
            'price' => '1399',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda modi, fugiat laboriosam aspernatur sed reprehenderit eaque!',

        ]);


        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '13 inch, 256GB SSD, 8GB RAM',
            'price' => '1199',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda modi, fugiat laboriosam aspernatur sed reprehenderit eaque!',

        ]);
    }
}
