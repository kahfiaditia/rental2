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
        Schema::create('full_day_all_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mobil')->nullable();
            $table->foreign('id_mobil')->references('id')->on('baru_daftar_mobil');
            $table->double('jam');
            $table->double('harga_full');
            $table->string('tol', 64)->nullable();
            $table->string('parkir', 64)->nullable();
            $table->string('driver', 64)->nullable();
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
        Schema::dropIfExists('full_day_all_models');
    }
};
