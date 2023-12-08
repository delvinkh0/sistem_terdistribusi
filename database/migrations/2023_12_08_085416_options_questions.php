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
        Schema::create('options_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('options_id');

            $table->foreign('questions_id')->references('id')->on('questions');
            $table->foreign('options_id')->references('id')->on('options');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options_questions');
    }
};
