<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FilmsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'TITLE' => Str::random(10),
            'DESCRIPTION'  => Str::random(10),
            'CREATED' => '2004.09.29',
            'POSTER' => Str::random(10),
        ]);
    }
}
