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
        Schema::create('sentences_history', function (Blueprint $table) {
            $table->foreignId('sentence_id')->constrained('sentences')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sentences_history', function (Blueprint $table) {
            $table->dropForeign(['sentence_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn('sentence_id');
            $table->dropColumn('user_id');
            $table->dropTimestamps();
        });
    }
};
