<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

           [
            'name' => 'amlodipine',
            'price' => '309',
            'description' => '10 capsule in pack',
            'category' => 'hair care',
            'gallery' => 'amlodipine.jpg'
           ],
           [
            'name' => 'pepcid',
            'price' => '799',
            'description' => '1 strip',
            'category' => 'eye care',
            'gallery' => 'pepcid.jpg'
           ],
           [
            'name' => 'pipzer',
            'price' => '1939',
            'description' => 'oil with the capsule not visible',
            'category' => 'body oil',
            'gallery' => 'pipzer.jpg'
           ]
        ]);
    }
}