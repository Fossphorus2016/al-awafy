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
        Schema::table('abouts', function (Blueprint $table) {
            $table->longText('sec2_p1')->nullable()->change();
            $table->longText('sec2_p2')->nullable()->change();
            $table->longText('sec3_p1')->nullable()->change();
            $table->longText('sec3_p2')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
};
