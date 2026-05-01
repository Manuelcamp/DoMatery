<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('User_history', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('user_id');
            $table->bigInteger('question_id')->nullable();
            $table->bigInteger('option_id')->nullable();
            $table->boolean('is_correct')->nullable();
            $table->timestampTz('created_at')->nullable()->default(DB::raw("now() AT TIME ZONE 'utc"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User_history');
    }
};
