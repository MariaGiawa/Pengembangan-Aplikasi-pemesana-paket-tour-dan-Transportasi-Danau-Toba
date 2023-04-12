<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleColumnToUsers extends Migration
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * DB Connection
     *
     * @var string
     */
    protected $column = 'role';
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
                $table->enum($this->column, ['admin','traveler', 'guest'])->nullable()->default(null)->after('password');
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
