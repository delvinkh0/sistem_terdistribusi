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
        Schema::create('testresults', function (Blueprint $table) {
            $table->id();
            $table->string('result_name');
            $table->string('result_description');
            $table->string('result_solution');
            $table->integer('first_limit');
            $table->integer('end_limit');
            $table->integer('max_score');
            $table->unsignedBigInteger('test_id');

            $table->foreign('test_id')->references('id')->on('test');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testresults');
    }
};
