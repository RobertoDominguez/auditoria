<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Roberto Dominguez',
                'ci' => '8235543',
                'password' => Hash::make('123123123'),
            ],
            [
                'name' => 'Erick Patton',
                'ci' => '7707614',
                'password' => Hash::make('123123123'),
            ],
            [
                'name' => 'Mariana Hurtado',
                'ci' => '5871731',
                'password' => Hash::make('123123123'),
            ],

        ]);

        DB::table('administrators')->insert([
            [
                'name' => 'Roberto Dominguez',
                'email' => 'roberto@gmail.com',
                'password' => Hash::make('123123123'),
            ],
        ]);
    }
}
