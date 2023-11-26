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
        Schema::create('blue_ocean_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blue_ocean_id')->nullable();
            $table->foreign('blue_ocean_id')->references('id')->on('blue_oceans')->onDelete('cascade');
            $table->string('name');
            $table->integer('people');
            $table->string('no_hp');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blue_ocean_chats');
    }
};
