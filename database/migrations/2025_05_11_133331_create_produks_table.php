<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                      // Nama produk/game
            $table->text('deskripsi')->nullable();       // Deskripsi game
            $table->decimal('harga', 10, 2);             // Harga
            $table->integer('stok');                     // Jumlah stok
            $table->string('gambar')->nullable();        // Gambar cover
            $table->unsignedBigInteger('kategori_id');  // ID kategori untuk relasi dengan tabel kategoris
            $table->string('platform');                  // Platform (PC, PS5, Xbox, dll)
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
