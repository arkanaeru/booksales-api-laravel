<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = ['name'];

    // Relasi: satu author punya banyak book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
