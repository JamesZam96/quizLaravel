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
        //
        Schema::create('truckers_trucks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trucker_id');
            $table->unsignedBigInteger('truck_id');
            $table->timestamps();
            $table->foreign('trucker_id')->references('id')->on('truckers')->onDelete('cascade');
            $table->foreign('truck_id')->references('id')->on('trucks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('truckers_trucks');
    }
};
