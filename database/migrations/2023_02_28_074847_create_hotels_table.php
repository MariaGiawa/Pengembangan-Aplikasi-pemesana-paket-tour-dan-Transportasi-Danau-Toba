<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hotel');
            $table->string('lokasi');
            $table->text('description');
            $table->integer('harga');
            $table->softDeletes(); // Adds the deleted_at column for soft delete
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable(); // Adds the created_by column as unsigned big integer
            $table->unsignedBigInteger('updated_by')->nullable(); // Adds the updated_by column as unsigned big integer
            $table->boolean('active')->default(true); // Adds the active column as boolean with default value true
            // Adds the created_by column as foreign key to the users table
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            // Adds the updated_by column as foreign key to the users table
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
