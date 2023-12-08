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
            Schema::create('stepQuestion', function (Blueprint $table) {
                $table->id();
                $table->string('stepQuestion');
                $table->unsignedBigInteger('step_id');

                $table->foreign('step_id')->references('id')->on('step');

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