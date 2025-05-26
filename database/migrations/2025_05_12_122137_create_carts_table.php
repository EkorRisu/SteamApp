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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // relasi ke tabel users
            $table->string('kode_produk'); // relasi ke produk
            $table->string('nama_user'); // sesuai model Cart
            $table->string('harga');
            $table->string('status');
            $table->timestamps();

            // Foreign key constraint (opsional tapi disarankan)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kode_produk')->references('kode_produk')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
