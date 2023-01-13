<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_absens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('pegawai_id')->nullable();
            $table->unsignedBigInteger('kategory_id')->nullable();
            $table->unsignedBigInteger('ruang_id')->nullable();
            $table->string('hari')->default('');
            $table->string('day')->default('');
            $table->time('masuk')->nullable();
            $table->time('pulang')->nullable();
            $table->bigInteger('jam')->nullable()->comment('durasi jam per hari');
            $table->bigInteger('menit')->nullable()->comment('durasi menit lebihnya jam per hari');
            $table->string('status', 1)->default('')->comment('2 masuk, 1 libur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_absens');
    }
}
