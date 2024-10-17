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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('language')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('canonical')->nullable();

            $table->string('banner_1_h1')->nullable();
            $table->string('banner_1_h2')->nullable();
            $table->longText('banner_1_p')->nullable();
            $table->string('banner_1_image')->nullable();
            $table->string('banner_2_h1')->nullable();
            $table->string('banner_2_h2')->nullable();
            $table->longText('banner_2_p')->nullable();
            $table->string('banner_2_image')->nullable();
            $table->string('banner_3_h1')->nullable();
            $table->string('banner_3_h2')->nullable();
            $table->longText('banner_3_p')->nullable();
            $table->string('banner_3_image')->nullable();

            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('whatsapp_url')->nullable();

            $table->string('about_section_h_blue')->nullable();
            $table->string('about_section_h_green')->nullable();
            $table->string('about_section_h_small')->nullable();
            $table->longText('about_section_p')->nullable();
            $table->string('about_section_image')->nullable();
            $table->string('about_section_url')->nullable();

            $table->string('our_value_1')->nullable();
            $table->string('our_value_1_image')->nullable();

            $table->string('our_value_2')->nullable();
            $table->string('our_value_2_image')->nullable();

            $table->string('our_value_3')->nullable();
            $table->string('our_value_3_image')->nullable();


            $table->string('our_brand_1')->nullable();
            $table->string('our_brand_image_1')->nullable();
            $table->string('our_brand_logo_1')->nullable();
            $table->string('our_brand_2')->nullable();
            $table->string('our_brand_image_2')->nullable();
            $table->string('our_brand_logo_2')->nullable();
            $table->string('our_brand_3')->nullable();
            $table->string('our_brand_image_3')->nullable();
            $table->string('our_brand_logo_3')->nullable();

            $table->string('section_6_h1')->nullable();
            $table->string('section_6_h2')->nullable();
            $table->string('section_6_h3')->nullable();
            $table->string('section_6_url_1')->nullable();
            $table->string('section_6_url_2')->nullable();

            $table->string('activity_url')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
