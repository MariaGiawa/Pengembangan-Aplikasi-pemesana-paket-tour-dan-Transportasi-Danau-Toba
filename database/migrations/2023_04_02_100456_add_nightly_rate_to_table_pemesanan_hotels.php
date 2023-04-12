<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNightlyRateToTablePemesananHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table = 'pemesanan_hotels';
    protected $column = 'nightly_rate';
    public function up()
    {
        Schema::table('pemesanan_hotels', function (Blueprint $table) {
            if (!Schema::hasColumn($this->table, $this->column)) {
                $table->string('nightly_rate')->nullable()->default(null)->after('night_count');
            }
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
            //
        });
    }
}
