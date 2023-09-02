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
        Schema::create('milestone', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Trip_id')->unsigned();
            $table->string('Description');
            $table->string('Photo_1');
            $table->string('Photo_2');
            $table->string('Photo_3');
            $table->string('Photo_4');
            $table->string('Video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestone');
    }
};
