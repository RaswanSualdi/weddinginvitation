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
        Schema::create('blue_oceans', function (Blueprint $table) {
            $table->id();
            $table->string('groom_name');
            $table->string('groom_nick_name');
            $table->string('groom_image')->nullable();
            $table->string('groom_socmed')->nullable();
            $table->string('groom_desc')->nullable();
            $table->string('groom_account_number')->nullable();
            $table->string('bride_name');
            $table->string('bride_nick_name');
            $table->string('bride_image')->nullable();
            $table->string('bride_socmed')->nullable();
            $table->string('bride_desc')->nullable();
            $table->string('bride_account_number')->nullable();
            $table->string('bg_opening')->nullable();
            $table->string('bg_section1')->nullable();
            $table->string('bg_countdown_timer')->nullable();
            $table->timestamp('akad_date_start')->nullable();
            $table->timestamp('akad_date_end')->nullable();
            $table->text('akad_location')->nullable();
            $table->string('latlong_akad_location')->nullable();
            $table->timestamp('resepsi_date_start')->nullable();
            $table->timestamp('resepsi_date_end')->nullable();
            $table->text('resepsi_location')->nullable();
            $table->string('latlong_resepsi_location')->nullable();
            $table->text('stories')->nullable();
            $table->jsonb('galleries')->nullable();
            $table->string('audio')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blue_oceans');
    }
};
