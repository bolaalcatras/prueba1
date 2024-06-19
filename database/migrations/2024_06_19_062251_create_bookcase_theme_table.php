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
        Schema::create('bookcase_theme', function (Blueprint $table) {
            $table->id();

            //foranea de estanterias
            $table->unsignedBigInteger('bookcase_id');
            $table->foreign('bookcase_id')->references('id')->on('bookcases')->onDelete('cascade');

            //foranea de tema
            $table->unsignedBigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookcase_themes');
    }
};
