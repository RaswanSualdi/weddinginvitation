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
        Schema::create('natural_green_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('green_natural_id')->nullable();
            $table->foreign('green_natural_id')->references('id')->on('green_naturals')->onDelete('cascade');
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
        Schema::dropIfExists('natural_green_chats');
    }
};
