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
        Schema::table('homes', function (Blueprint $table) {
            $table->renameColumn('banner_1_p', 'banner_1_p1');
            $table->renameColumn('banner_2_p', 'banner_2_p1');
            $table->renameColumn('banner_3_p', 'banner_3_p1');
            $table->string('banner_1_p2')->nullable();
            $table->string('banner_2_p2')->nullable();
            $table->string('banner_3_p2')->nullable();
            $table->string('our_value_h1')->nullable();
            $table->string('our_value_h2')->nullable();
            $table->string('our_brand_h1')->nullable();
            $table->string('our_brand_h2')->nullable();

            $table->string('our_activity_h1')->nullable();
            $table->string('our_activity_h2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homes', function (Blueprint $table) {
            //
        });
    }
};
