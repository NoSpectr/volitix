<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_tiket', function (Blueprint $table) {
            $table->id('id_tiket');
            $table->string('nama_event');
            $table->dateTime('tgl_event');
            $table->decimal('harga', 8, 2);
            $table->integer('stock_tiket');
            $table->string('gambar')->nullable();
            $table->string('lokasi');
            $table->text('deskripsi')->nullable();
            $table->time('jam')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_tiket');
    }
};
