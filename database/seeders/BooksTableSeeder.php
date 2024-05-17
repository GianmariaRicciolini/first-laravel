<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->sentence(rand(3, 6)), // Genera un titolo casuale
                'author' => fake()->name(), // Genera un nome di autore casuale
                'genre' => fake()->word(), // Genera un genere casuale
                'image' => fake()->imageUrl(640, 480, 'books', true), // Genera un URL di immagine casuale
                'date' => fake()->year(), // Genera un anno casuale
                'published_at' => now(), // Aggiunge la data di pubblicazione corrente
            ]);
        }
    }
}
