<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            
            // Foreign Key to Users
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            
            // Polymorphic relation columns: reviewable_type & reviewable_id
            $table->morphs('reviewable'); 
            
            $table->tinyInteger('rating');
            $table->text('comment')->nullable();
            $table->boolean('is_approved')->default(true);
            $table->timestamps();

            // Duplicate Review Prevention (Unique Index)
            $table->unique(['user_id', 'reviewable_type', 'reviewable_id'], 'unique_user_review');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};