<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();                     // Primary key
            $table->string('title');          // Judul buku
            $table->foreignId('author_id')   // Foreign key ke authors
                  ->constrained()
                  ->onDelete('cascade');      // Hapus buku jika author dihapus
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
