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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->longText('introduction');
            $table->string('url');
            $table->string('image');
            $table->string('alt');
            $table->string('Theme');
            $table->string('ThemePrincipal');
            $table->string('FullDate')->default(null);
            $table->string('updated_at');
            $table->string('published_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
