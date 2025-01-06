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
        Schema::create('manager_renters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->string('FullName');
            $table->string('LastName');
            $table->string('NickName');
            $table->integer('Age');
            $table->date('BirthDay');
            $table->integer('Tel');
            $table->string('NumberRoom');
            $table->string('TypeRoom');
            $table->string('HomeNumber');
            $table->string('Moo');
            $table->string('Soi');
            $table->string('Tumbon');
            $table->string('Ampher');
            $table->string('Province');
            $table->string('Post');
            $table->integer('BeforeWater');
            $table->integer('BeforeEV');
            $table->string('ImageID');
            $table->string('ImageAddress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manager_renters');
    }
};
