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
            $table->id('identifier')->index();
            $table->string('title')->default('null');
            $table->string('author')->default('null');
            $table->longText('introduction')->default('null');
            $table->string('UrlArticle')->default('null')->index();
            $table->string('LinkImage')->default('null')->index();
            $table->string('AltImage')->default('null');
            $table->string('Theme')->default('null')->index();
            $table->string('ThemePrincipal')->default('null')->index();
            $table->string('FullDate')->default('null');
            $table->string('updated_at')->default('null');
            $table->string('published_at')->default('null');
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
