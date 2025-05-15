<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['title' => 'Laut Bercerita', 'author_id' => 1],
            ['title' => 'Puisi', 'author_id' => 2],
            ['title' => 'Harry Potter', 'author_id' => 3],
            ['title' => 'Adventures of Tom Sawyer', 'author_id' => 4],
            ['title' => 'Kafka on the Shore', 'author_id' => 5],
        ]);
    }
}
