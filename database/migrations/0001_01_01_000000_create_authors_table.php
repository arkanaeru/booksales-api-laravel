<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();                 // Primary key, auto increment
            $table->string('name');       // Nama author
            $table->timestamps();         // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
};
