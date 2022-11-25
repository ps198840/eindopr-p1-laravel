<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'name' => 'Led Zeppelin',
            'genre' => 'Rock',
            'founded' => '1968',
            'active_till' => '2007'
        ]);
        DB::table('bands')->insert([
            'name' => 'The Beatles',
            'genre' => 'Pop',
            'founded' => '1960',
            'active_till' => '1970'
        ]);
        DB::table('bands')->insert([
            'name' => 'AC/DC',
            'genre' => 'Hardrock',
            'founded' => '1973'
        ]);
    }
}
