<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable(); // Menyimpan ID pengguna
            $table->unsignedBigInteger('id_tiket')->nullable(); // Menyimpan ID tiket
            $table->integer('jumlah_tiket'); // Menyimpan jumlah tiket
            $table->decimal('total_harga', 10, 2); // Menyimpan total harga
            $table->string('metode_pembayaran'); // Menyimpan metode pembayaran
            $table->string('status_pembayaran')->default('Pending'); // Menyimpan status pembayaran
            $table->timestamps();

            // Menambahkan foreign key
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tiket')->references('id_tiket')->on('tb_tiket')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pembayaran');
    }
};
