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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->integer('total_view');
            $table->integer('total_saved');
            // $table->foreignId('level_id')
            //     ->constrained('levels')
            //     ->onDelete('no action')
            //     ->onUpdate('cascade');
            // $table->foreignId('tag_ig')
            //     ->constrained('tags')
            //     ->onDelete('no action')
            //     ->onUpdate('cascade');
            $table->enum('status', ['drafted', 'published']);
            $table->string('title', 100);
            $table->longText('content');
            $table->string('thumbnail', 200);
            $table->timestamps();
            $table->boolean('is_delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
