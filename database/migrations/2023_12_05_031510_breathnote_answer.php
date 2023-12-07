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
        Schema::create('breathnote_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('breathnote_id');
            $table->unsignedBigInteger('breathanswer_id');

            $table->foreign('breathnote_id')->references('id')->on('breath_note');;
            $table->foreign('breathanswer_id')->references('id')->on('breath_answer');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('breathnote_answer');
    }
};
