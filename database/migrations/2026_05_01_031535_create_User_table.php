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
        Schema::create('User', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->timestampTz('created_at')->default(DB::raw("now() AT TIME ZONE 'utc"));
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('total_points')->nullable();
            $table->timestampTz('updated_at')->nullable()->default(DB::raw("now() AT TIME ZONE 'utc"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
