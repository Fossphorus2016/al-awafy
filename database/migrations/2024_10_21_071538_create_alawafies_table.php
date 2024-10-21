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
        Schema::create('alawafies', function (Blueprint $table) {
            $table->id();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('conanical')->nullable();

            $table->string('banner_h1')->nullable();
            $table->string('banner_h2')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('section1_h1')->nullable();
            $table->string('section1_h2')->nullable();
            $table->string('section1_p')->nullable();
            $table->string('section1_image')->nullable();


            $table->string('brand_1_h1')->nullable();
            $table->string('brand_1_h2')->nullable();
            $table->string('brand_1_p')->nullable();
            $table->string('brand_1_url')->nullable();
            $table->string('brand_1_image')->nullable();

            $table->string('brand_2_h1')->nullable();
            $table->string('brand_2_h2')->nullable();
            $table->string('brand_2_p')->nullable();
            $table->string('brand_2_url')->nullable();
            $table->string('brand_2_image')->nullable();



            $table->string('brand_3_h1')->nullable();
            $table->string('brand_3_h2')->nullable();
            $table->string('brand_3_p')->nullable();
            $table->string('brand_3_url')->nullable();
            $table->string('brand_3_image')->nullable();

            $table->string('brand_4_h1')->nullable();
            $table->string('brand_4_h2')->nullable();
            $table->string('brand_4_p')->nullable();
            $table->string('brand_4_url')->nullable();
            $table->string('brand_4_image')->nullable();


            $table->string('brand_5_h1')->nullable();
            $table->string('brand_5_h2')->nullable();
            $table->string('brand_5_p')->nullable();
            $table->string('brand_5_url')->nullable();
            $table->string('brand_5_image')->nullable();


            $table->string('brand_6_h1')->nullable();
            $table->string('brand_6_h2')->nullable();
            $table->string('brand_6_p')->nullable();
            $table->string('brand_6_url')->nullable();
            $table->string('brand_6_image')->nullable();


            $table->string('brand_7_h1')->nullable();
            $table->string('brand_7_h2')->nullable();
            $table->string('brand_7_p')->nullable();
            $table->string('brand_7_url')->nullable();
            $table->string('brand_7_image')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alawafies');
    }
};
