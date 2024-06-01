<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Bolsa Gucci',
            'amount' => 1000, 
            'image' => 'img',
            'user_id'=> 1,
            'description'=> 'Para toda toda la ocasión',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Billetera',
            'amount' => 250, 
            'image' => 'img',
            'user_id'=> 2,
            'description'=> 'Adaptado a tu necesidad',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Reloj',
            'amount' => 1250, 
            'image' => 'img',
            'user_id'=> 1,
            'description'=> 'Una noche inolvidable',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Reloj Niña',
            'amount' => 1250, 
            'image' => 'img',
            'user_id'=> 1,
            'description'=> 'Para una ocasión especial',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Reloj Niño',
            'amount' => 1250, 
            'image' => 'img',
            'user_id'=> 2,
            'description'=> 'Para una ocasión especial',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
