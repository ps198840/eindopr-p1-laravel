<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'Bound 2',
            'singer' => 'Kanye West'
        ]);
        DB::table('songs')->insert([
            'title' => 'Money Trees',
            'singer' => 'Kendrick Lamar'
        ]);
        DB::table('songs')->insert([
            'title' => 'honest',
            'singer' => 'Baby Keem'
        ]);
        DB::table('songs')->insert([
            'title' => 'White Ferrari',
            'singer' => 'Frank Ocean'
        ]);
        DB::table('songs')->insert([
            'title' => 'Touch the Sky',
            'singer' => 'Kanye West'
        ]);
    }
}
