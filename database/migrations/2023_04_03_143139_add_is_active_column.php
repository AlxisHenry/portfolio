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
        Schema::table('news', function (Blueprint $table) {
            $table->boolean('is_active')
                ->default(true)
                ->after('published_at');
        });
        Schema::table('resources', function (Blueprint $table) {
            $table->boolean('is_active')
                ->default(true)
                ->after('link');
        });
        Schema::table('hobbies', function (Blueprint $table) {
            $table->boolean('is_active')
                ->default(true)
                ->after('position');
        });
        Schema::table('experiences', function (Blueprint $table) {
            $table->boolean('is_active')
                ->default(true)
                ->after('is_current');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('is_active')
                ->default(true)
                ->after('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
