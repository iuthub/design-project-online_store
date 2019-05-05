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

        // FOOTBALL

        // FOOTBALL KIDS
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Football K' . $i,
                'slug' => 'football-k(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '1',
                'sports_id' => '1',

            ]);
        }


        // FOOTBALL MEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Football M' . $i,
                'slug' => 'football-m(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '2',
                'sports_id' => '1',

            ]);
        }

        // FOOTBALL WOMEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Football W' . $i,
                'slug' => 'football-w(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '3',
                'sports_id' => '1',

            ]);
        }


        // TENNIS

        // TENNIS KIDS
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Tennis K' . $i,
                'slug' => 'tennis-k(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '1',
                'sports_id' => '2',

            ]);
        }


        // TENNIS MEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Tennis M' . $i,
                'slug' => 'tennis-m(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '2',
                'sports_id' => '2',

            ]);
        }

        // TENNIS WOMEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Tennis W' . $i,
                'slug' => 'tennis-w(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '3',
                'sports_id' => '2',

            ]);
        }


        // FITNESS

        // FITNESS KIDS
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Fitness K' . $i,
                'slug' => 'fitness-k(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '1',
                'sports_id' => '3',

            ]);
        }


        // FITNESS MEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Fitness M' . $i,
                'slug' => 'fitness-m(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '2',
                'sports_id' => '3',

            ]);
        }

        // FITNESS WOMEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Fitness W' . $i,
                'slug' => 'fitness-w(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '3',
                'sports_id' => '3',

            ]);
        }


        // SKIING

        // SKIING KIDS
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Skiing K' . $i,
                'slug' => 'skiing-k(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '1',
                'sports_id' => '4',

            ]);
        }


        // SKIING MEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Skiing M' . $i,
                'slug' => 'skiing-m(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '2',
                'sports_id' => '4',

            ]);
        }

        // SKIING WOMEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Skiing W' . $i,
                'slug' => 'skiing-w(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '3',
                'sports_id' => '4',

            ]);
        }
         // Accessories
         for($i=1; $i < 25; $i++){
            Product::create([
                'name' => 'Football A' . $i,
                'slug' => 'football-a(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '4',
                'sports_id' => '1',

            ]);
        }

        for($i=1; $i < 25; $i++){
            Product::create([
                'name' => 'Tennis A' . $i,
                'slug' => 'tennis-a(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '4',
                'sports_id' => '2',

            ]);
        }

        for($i=1; $i < 25; $i++){
            Product::create([
                'name' => 'Fitness A' . $i,
                'slug' => 'fitness-a(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '4',
                'sports_id' => '3',

            ]);
        }

        for($i=1; $i < 25; $i++){
            Product::create([
                'name' => 'Skiing A' . $i,
                'slug' => 'skiing-a(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '4',
                'sports_id' => '4',

            ]);
        }

        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Golf A' . $i,
                'slug' => 'golf-a(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '4',
                'sports_id' => '5',

            ]);
        }

        // GOLF

        // GOLF KIDS
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Golf K' . $i,
                'slug' => 'golf-k(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '1',
                'sports_id' => '5',

            ]);
        }


        // GOLF MEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Golf M' . $i,
                'slug' => 'golf-m(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '2',
                'sports_id' => '5',

            ]);
        }

        // GOLF WOMEN
        for($i=1; $i < 10; $i++){
            Product::create([
                'name' => 'Golf W' . $i,
                'slug' => 'golf-w(' . $i . ')',
                'price' => rand(39, 99),
                'category_id' => '3',
                'sports_id' => '5',

            ]);
        }

    }
}
