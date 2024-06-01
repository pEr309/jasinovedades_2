<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_category')->insert(
            [
                'product_id' => 1,
                'category_id' =>2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
        ]);
    }
}
