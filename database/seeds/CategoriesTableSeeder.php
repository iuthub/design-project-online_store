<?php

use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Kids', 'slug' => 'kids', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Men', 'slug' => 'men', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women', 'slug' => 'women', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now],


        ]);
    }
}
