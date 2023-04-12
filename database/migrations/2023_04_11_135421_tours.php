<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table){
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->string('detail');
            $table->string('harga');
            $table->string('jumlahorang');
            $table->string('diskon');
            $table->string('hargatotal');
            $table->string('jumlah_hari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tours');
    }
}
