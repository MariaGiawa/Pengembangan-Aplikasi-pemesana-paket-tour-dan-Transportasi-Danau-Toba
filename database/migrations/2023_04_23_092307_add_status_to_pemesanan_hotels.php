<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToPemesananHotels extends Migration
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'pemesanan_hotels';

    /**
     * DB Connection
     *
     * @var string
     */
    protected $column = 'status';
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            if (!Schema::hasColumn($this->table, $this->column)) {
                $table->enum($this->column, ['pending','rejected', 'accepted'])->default('pending')->after('total_cost');
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
        Schema::table($this->table, function (Blueprint $table) {
            if (Schema::hasColumn($this->table, $this->column)) {
                $table->dropColumn($this->column);
            }
        });
    }
}
