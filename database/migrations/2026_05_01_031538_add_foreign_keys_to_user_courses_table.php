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
        Schema::table('user_courses', function (Blueprint $table) {
            $table->foreign(['course_id'], 'user_courses_course_id_fkey')->references(['id'])->on('Courses')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_courses_user_id_fkey')->references(['id'])->on('User')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_courses', function (Blueprint $table) {
            $table->dropForeign('user_courses_course_id_fkey');
            $table->dropForeign('user_courses_user_id_fkey');
        });
    }
};
