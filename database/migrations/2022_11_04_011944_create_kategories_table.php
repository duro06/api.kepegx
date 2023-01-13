<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategories', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->time('masuk')->nullable();
            $table->time('pulang')->nullable();
            $table->string('warna')->nullable();
            $table->bigInteger('jam')->nullable()->comment('durasi jam per minggu');
            $table->bigInteger('menit')->nullable()->comment('durasi menit lebihnya jam per minggu');
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
        Schema::dropIfExists('kategories');
    }
}
