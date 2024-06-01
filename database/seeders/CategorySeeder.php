<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'name'=> 'Dama',
            'cant_Almc'=> '10',
            'product_id'=> 1,
            'user_id' => 2,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('category')->insert([
            'name'=> 'Dama',
            'cant_Almc'=> '10',
            'product_id'=> 1,
            'user_id' => 3,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('category')->insert([
            'name'=> 'Dama',
            'cant_Almc'=> '10',
            'product_id'=> 1,
            'user_id' => 4,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        DB::table('category')->insert([
            'name'=> 'Dama',
            'cant_Almc'=> '10',
            'product_id'=> 1,
            'user_id' => 5,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
    
    }
}
