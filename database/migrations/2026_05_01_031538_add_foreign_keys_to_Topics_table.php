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
        Schema::table('Topics', function (Blueprint $table) {
            $table->foreign(['discipline_id'], 'Topics_discipline_id_fkey')->references(['id'])->on('Disciplines')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Topics', function (Blueprint $table) {
            $table->dropForeign('Topics_discipline_id_fkey');
        });
    }
};
