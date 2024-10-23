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
        Schema::create('our_activity_pages', function (Blueprint $table) {
            $table->id();
            $table->string('language');

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('canonical')->nullable();


            $table->string('banner_h1')->nullable();
            $table->string('banner_h2')->nullable();
            $table->string('banner_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_activity_pages');
    }
};
