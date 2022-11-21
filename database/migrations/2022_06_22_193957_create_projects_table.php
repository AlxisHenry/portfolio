<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('identifier')->index();
            $table->string('title')->default(null)->nullable();
            $table->string('url_name')->default(null)->nullable();
            $table->longText('description')->default(null)->nullable();
            $table->string('author')->default(null)->nullable();
            $table->string('documentationLink')->default(null)->nullable();
            $table->string('GithubLink')->default(null)->nullable();
            $table->string('linkImage')->default(null)->nullable();
            $table->string('languages')->default(null)->nullable();
            $table->date('published_at')->useCurrent()->nullable();
            $table->date('edit_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
