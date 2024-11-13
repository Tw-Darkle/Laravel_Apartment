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
        Schema::create('setting_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('priceWater');
            $table->integer('priceEV');
            $table->integer('priceAirRoom');
            $table->integer('priceFanRoom');
            $table->integer('CAMfee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_rooms');
    }
};
