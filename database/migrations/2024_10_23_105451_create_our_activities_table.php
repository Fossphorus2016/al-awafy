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
        Schema::create('our_activities', function (Blueprint $table) {
            $table->id();

            $table->string('language');

            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->longText('paragraph')->nullable();
            $table->longText('images')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_activities');
    }
};
