<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_product'=> 'GoodDay Carebian',
            'harga_product' => 10000,
            'desc_product' => 'Kopi',
            'pic_product' => 'This Picture',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'nama_product'=> 'Green Tea',
            'harga_product' => 5000,
            'desc_product' => 'Murah Sekali',
            'pic_product' => 'Gambar ini',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'nama_product'=> 'Ayam',
            'harga_product' => 45000,
            'desc_product' => 'Lauk',
            'pic_product' => 'Picture',
            'category_id' => 2
        ]);
    }
}
