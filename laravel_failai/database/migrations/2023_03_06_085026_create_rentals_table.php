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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('power')->nullable();
            $table->unsignedBigInteger('fuel_type_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('gearbox_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('price');
            $table->string('year');
            $table->timestamps();

            $table->foreign('fuel_type_id')->references('id')->on('fuel_types');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('gearbox_id')->references('id')->on('gearboxes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
