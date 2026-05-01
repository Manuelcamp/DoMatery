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
        Schema::table('User_history', function (Blueprint $table) {
            $table->foreign(['option_id'], 'User_history_option_id_fkey')->references(['id'])->on('Options')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['question_id'], 'User_history_question_id_fkey')->references(['id'])->on('Questions')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'User_history_user_id_fkey')->references(['id'])->on('User')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('User_history', function (Blueprint $table) {
            $table->dropForeign('User_history_option_id_fkey');
            $table->dropForeign('User_history_question_id_fkey');
            $table->dropForeign('User_history_user_id_fkey');
        });
    }
};
