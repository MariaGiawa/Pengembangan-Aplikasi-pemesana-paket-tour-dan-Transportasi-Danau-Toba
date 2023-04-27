<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStatusFromHotels extends Migration
{
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }

    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('status');
        });
    }
}
