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
        Schema::create('bill_meters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('Rooms');
            $table->integer('beforeWM');
            $table->integer('beforeEVM');
            $table->integer('afterWM');
            $table->integer('afterEVM');
            $table->integer('totalWM');
            $table->integer('totalEV');
            $table->integer('totalPriceWM');
            $table->integer('totalPriceEV');
            $table->integer('CAMfee');
            $table->integer('priceRoom');
            $table->integer('totalAllPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_meters');
    }
};
