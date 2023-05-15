<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Database\Factories\AuthorBookFactory;
use Database\Factories\BookGenreFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(10)
            ->hasAttached(
                Author::factory()->count(3)
            )
            ->hasAttached(
                Genre::factory()->count(2)
            )
            ->create();
    }
}
