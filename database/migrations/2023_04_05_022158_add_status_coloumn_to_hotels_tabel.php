<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColoumnToHotelsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table='hotels';
    protected $column='status';

    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            if (!Schema::hasColumn($this->table, $this->column)) {
                $table->enum($this->column, ['pending', 'approved', 'rejected'])->default('pending')->nullable()->default(null)->after('harga');
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
        Schema::table('hotels', function (Blueprint $table) {
            if (Schema::hasColumn($this->table, $this->column)) {
                $table->dropColumn($this->column);
                }
        });
    }
}
