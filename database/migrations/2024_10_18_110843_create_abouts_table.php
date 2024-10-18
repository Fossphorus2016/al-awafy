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

            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('canonical');

            $table->string('sec1_image');
            $table->string('sec1_h1');
            $table->string('sec1_h2');

            $table->string('sec2_image');
            $table->string('sec2_h1');
            $table->string('sec2_h2');
            $table->string('sec2_p1');
            $table->string('sec2_p2');

            $table->string('sec3_image');
            $table->string('sec3_h1');
            $table->string('sec3_h2');
            $table->string('sec3_p1');
            $table->string('sec3_p2');
            $table->string('sec3_h3');
            $table->string('sec3_h4');




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
