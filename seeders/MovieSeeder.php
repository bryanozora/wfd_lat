<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('movies')->insert([
            [
                'movie_title' => 'The Shawshank Redemption',
                'duration' => 142,
                'release_date' => '1994-09-14',
            ],
            [
                'movie_title' => 'The Godfather',
                'duration' => 175,
                'release_date' => '1972-03-24'
            ],
            [
                'movie_title' => 'The Dark Knight',
                'duration' => 152,
                'release_date' => '2008-07-18'
            ],
            [
                'movie_title' => 'The Lord of the Rings: The Return of the King',
                'duration' => 201,
                'release_date' => '2003-12-17'
            ],
            [
                'movie_title' => 'Pulp Fiction',
                'duration' => 154,
                'release_date' => '1994-10-14'
            ]
        ]);
    }
}
