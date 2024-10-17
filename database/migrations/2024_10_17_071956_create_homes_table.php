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
            $table->string('language');

            $table->

            $table->string('banner_1_h1');
            $table->string('banner_1_h2');
            $table->longText('banner_1_p');
            $table->string('banner_1_image');
            $table->string('banner_2_h1');
            $table->string('banner_2_h2');
            $table->longText('banner_2_p');
            $table->string('banner_2_image');
            $table->string('banner_3_h1');
            $table->string('banner_3_h2');
            $table->longText('banner_3_p');
            $table->string('banner_3_image');

            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('whatsapp_url');

            $table->string('about_section_h_blue');
            $table->string('about_section_h_green');
            $table->string('about_section_h_small');
            $table->longText('about_section_p');
            $table->string('about_section_image');
            $table->string('about_section_url');

            $table->string('our_value_1');
            $table->string('our_value_1_image');


            $table->string('our_value_2');
            $table->string('our_value_2_image');


            $table->string('our_value_3');
            $table->string('our_value_3_image');


            $table->string('section_6_h1');
            $table->string('section_6_h2');
            $table->string('section_6_h3');
            $table->string('section_6_url_1');
            $table->string('section_6_url_2');



            $table->string('activity_url');


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
