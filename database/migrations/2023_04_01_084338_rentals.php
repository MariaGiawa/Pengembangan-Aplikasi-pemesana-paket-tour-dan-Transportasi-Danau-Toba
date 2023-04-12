<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rentals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transportation_id');
            $table->string('pickinglocation');
            $table->date('pickingoff');
            $table->date('pickingupdate');
            $table->dateTime('pickinguphour');
            $table->date('pickingoffdate');
            $table->dateTime('pickingoffhour');
            $table->softDeletes(); // Adds the deleted_at column for soft delete
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable(); // Adds the created_by column as unsigned big integer
            $table->unsignedBigInteger('updated_by')->nullable(); // Adds the updated_by column as unsigned big integer
            $table->boolean('active')->default(true); // Adds the active column as boolean with default value true
            // Adds the created_by column as foreign key to the users table
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            // Adds the updated_by column as foreign key to the users table
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');

            $table->foreign('transportation_id')
            ->references('id')
            ->on('transportations')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
