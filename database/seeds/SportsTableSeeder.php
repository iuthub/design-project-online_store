<?php

use Carbon\Carbon;
use App\Sports;
use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Sports::insert([
            ['name' => 'Football', 'slug' => 'football', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tennis', 'slug' => 'tennis', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fitness', 'slug' => 'fitness', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Skiing', 'slug' => 'skiing', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Golf', 'slug' => 'golf', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
