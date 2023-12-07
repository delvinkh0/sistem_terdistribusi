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
        Schema::create('breath_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('step_id');
            $table->unsignedBigInteger('breathNote_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('breath_note');;
            $table->foreign('step_id')->references('id')->on('breath_answer');;
            $table->foreign('breathNote_id')->references('id')->on('breath_answer');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
