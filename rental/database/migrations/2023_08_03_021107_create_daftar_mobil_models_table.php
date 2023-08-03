<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baru_daftar_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->string('image', 64)->nullable();
            $table->string('merk', 64)->nullable();
            $table->string('model', 64)->nullable();
            $table->string('layanan', 64)->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('user_created')->nullable();
            $table->foreign('user_created')->references('id')->on('users');
            $table->string('aktif', 1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baru_daftar_mobil');
    }
};
