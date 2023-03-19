<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('child_seat')->default('ne')->nullable();
            $table->string('second_driver')->default('ne')->nullable();
            $table->string('gps')->default('ne')->nullable();
            $table->string('wifi')->default('ne')->nullable();
            $table->string('name_of_renter');
            $table->string('email_of_renter');
            $table->string('phone_of_renter')->nullable();
            $table->string('message_of_renter')->nullable();
            $table->timestamps();

            $table->foreign('rental_id')->references('id')->on('rentals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
