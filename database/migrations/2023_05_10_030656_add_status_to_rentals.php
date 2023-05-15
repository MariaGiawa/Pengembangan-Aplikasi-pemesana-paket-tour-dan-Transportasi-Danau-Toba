<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToRentals extends Migration
{
    protected $table = 'rentals';
    protected $column = 'role';

    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            if (!Schema::hasColumn($this->table, $this->column)) {
                $table->enum($this->column, ['accepted', 'rejected', 'pending'])->nullable()->default('pending')->after('active');
            }
        });
    }

    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            if (Schema::hasColumn($this->table, $this->column)) {
                $table->dropColumn($this->column);
            }
        });
    }
}