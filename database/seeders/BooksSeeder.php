<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10000; $i++) {
            DB::table('books')->insert([
                'title' => "Book $i",
                'author' => "Author " . rand(1, 10),
                'price' => rand(100, 999) + rand(0, 99) / 100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}}
