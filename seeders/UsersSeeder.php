<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'LOGIN'  => Str::random(10),
        'PASSWORD' => Hash::make('12345'),
        'NAME'  => Str::random(10),
        'SURNAME'  => Str::random(10),
        ]);
    }
}
