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
        Schema::table('favorites', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('artwork_id')->constrained()->onDelete('cascade')->nullable();
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
            Schema::table('favorites', function (Blueprint $table) {
                $table->dropColumn('user_id');
                $table->dropColumn('artwork_id');
            });
        
    }
};