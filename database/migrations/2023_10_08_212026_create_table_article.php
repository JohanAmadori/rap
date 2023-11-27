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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->text('description')->nullable(true);
            $table->decimal('prix_public', 9, 2)->nullable(false);
            $table->decimal('prix_achat', 9, 2)->nullable(false);           

            $table->timestamps();

            $table->index('prix_public');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};