<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Agatha Christie'],
            ['id' => 2, 'name' => 'George Orwell'],
            ['id' => 3, 'name' => 'Stephen King'],
            ['id' => 4, 'name' => 'J.K. Rowling'],
            ['id' => 5, 'name' => 'J.R.R. Tolkien'],
        ];
    }
}
