<?php
namespace ProductTypeTableSeeder;
use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_type')->insert([
            'name'=>'Loại sp 1'
        ]);
    }
}
