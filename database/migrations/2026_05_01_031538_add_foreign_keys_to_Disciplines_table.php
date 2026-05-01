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
        Schema::table('Disciplines', function (Blueprint $table) {
            $table->foreign(['course_id'], 'disciplines_course_id_fkey')->references(['id'])->on('Courses')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Disciplines', function (Blueprint $table) {
            $table->dropForeign('disciplines_course_id_fkey');
        });
    }
};
