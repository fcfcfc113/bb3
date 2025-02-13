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
        Schema::create('table_post_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('post_id')->constrained('table_posts')->cascadeOnDelete();
            // nếu lớn hơn 0 thì là user_id, còn không thì khách vãng lai
            $table->integer('user_id')->default(-1);
            // sub comment
            $table->bigInteger('parent_id')->default(0);
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_post_comments');
    }
};
