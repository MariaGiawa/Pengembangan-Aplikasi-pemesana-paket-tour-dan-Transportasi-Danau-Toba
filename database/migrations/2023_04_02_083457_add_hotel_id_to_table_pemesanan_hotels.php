<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHotelIdToTablePemesananHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table = 'pemesanan_hotels';
    protected $column = 'hotel_id';
    public function up()
    {
        Schema::table('pemesanan_hotels', function (Blueprint $table) {
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanan_hotels', function (Blueprint $table) {
            $table->dropColumn('hotel_id');
        });
    }
}
