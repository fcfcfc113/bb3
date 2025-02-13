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
        Schema::table('table_posts', function (Blueprint $table) {
            // views
            $table->unsignedBigInteger('views')->default(0);
            // price
            $table->double('price')->default(0);
            // discount
            $table->double('discount')->default(0);
            // warning
            $table->tinyInteger('warning')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_posts', function (Blueprint $table) {
            //
        });
    }
};
