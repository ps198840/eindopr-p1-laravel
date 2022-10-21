<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'merk' => 'Audi',
            'type' => 'R8',
            'bouwjaar' => '2012',
        ]);
        DB::table('cars')->insert([
            'merk' => 'BMW',
            'type' => 'M5',
            'bouwjaar' => '2018',
        ]);
        DB::table('cars')->insert([
            'merk' => 'Mercedes',
            'type' => 'A35',
            'bouwjaar' => '2016',
        ]);
        DB::table('cars')->insert([
            'merk' => 'Volkswagen',
            'type' => 'Arteon',
            'bouwjaar' => '2020',
        ]);
        DB::table('cars')->insert([
            'merk' => 'Smart',
            'type' => 'Fortwo',
            'bouwjaar' => '2015',
        ]);
    }
}
