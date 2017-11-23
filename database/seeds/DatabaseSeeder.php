<?php

use Illuminate\Database\Seeder;
use CustomerTableSeeder\CustomerTableSeeder;
use ProductTypeTableSeeder\ProductTypeTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\CustomerTableSeeder\CustomerTableSeeder::class);
        $this->call(\ProductTypeTableSeeder\ProductTypeTableSeeder::class);
      
    }
}
