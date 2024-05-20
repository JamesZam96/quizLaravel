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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('description');
            $table->string('addressee'); //destinatario
            $table->string('addressPackage');
            $table->unsignedBigInteger('trucker_id');
            $table->timestamps();
            $table->foreign('trucker_id')->references('id')->on('truckers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
