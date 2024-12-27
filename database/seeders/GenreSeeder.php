<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     *
     * @return void
     */
    public function run()
    {
        // Daftar genre
        $genres = [
            'Fantasy',
            'Science Fiction',
            'Mystery',
            'Thriller',
            'Romance',
            'Horror',
            'Historical',
            'Non-fiction',
            'Biography',
            'Self-help',
            'Adventure',
            'Poetry',
            'Drama',
            'Humor',
            'Children\'s',
            'Young Adult',
            'Classic',
            'Crime',
            'Graphic Novel',
            'Western'
        ];

        // Tambahkan genre ke database
        foreach ($genres as $genre) {
            Genre::create(['name_genre' => $genre]);
        }
    }
}
