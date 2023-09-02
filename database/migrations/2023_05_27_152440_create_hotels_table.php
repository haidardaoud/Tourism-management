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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained('cities');
            $table->string('Name');
            $table->string('Address');
            $table->text('description');
            $table->string('link');
            $table->string('image_profile');
            $table->unsignedBigInteger('number_of_room');
            $table->unsignedBigInteger('phone');
            $table->unsignedBigInteger('stars');
            $table->unsignedBigInteger('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
