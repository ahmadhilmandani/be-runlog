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
        Schema::create('log_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('log_id')
                ->constrained('logs')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreignId('tag_id')
                ->constrained('tags')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->timestamps();
            $table->boolean('is_delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_tag');
    }
};
