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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('language')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('canonical')->nullable();

            $table->string('sec1_image')->nullable();
            $table->string('sec1_h1')->nullable();
            $table->string('sec1_h2')->nullable();

            $table->string('sec2_image')->nullable();
            $table->string('sec2_h1')->nullable();
            $table->string('sec2_h2')->nullable();
            $table->string('sec2_p1')->nullable();
            $table->string('sec2_p2')->nullable();

            $table->string('sec3_image')->nullable();
            $table->string('sec3_h1')->nullable();
            $table->string('sec3_h2')->nullable();
            $table->string('sec3_p1')->nullable();
            $table->string('sec3_p2')->nullable();
            $table->string('sec3_h3')->nullable();
            $table->string('sec3_h4')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
