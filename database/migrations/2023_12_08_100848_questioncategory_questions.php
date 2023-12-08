<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Termwind\Question;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('questioncategory_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questioncategory_id');
            $table->unsignedBigInteger('questions_id');

            $table->foreign('questioncategory_id')->references('id')->on('question_category');
            $table->foreign('questions_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questioncategory_questions');
    }
};
