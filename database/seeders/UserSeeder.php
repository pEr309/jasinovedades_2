<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Jose Brigdeston',
            'email'=> 'joseb@gmail.com',
            'password'=> Hash::make('2345'),
            'rol_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);

        DB::table('users')->insert([
            'name' => 'Jasi figueroa',
            'email'=> 'jas@gmail.com',
            'password'=> Hash::make('2345'),
            'rol_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Janett perez',
            'email'=> 'figueroaj@gmail.com',
            'password'=> Hash::make('2345'),
            'rol_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Areli figueroa',
            'email'=> 'are@gmail.com',
            'password'=> Hash::make('2345'),
            'rol_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Nami perez',
            'email'=> 'nami@gmail.com',
            'password'=> Hash::make('2345'),
            'rol_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

    }
}
