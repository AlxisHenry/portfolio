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
        Schema::create('news_dates', function (Blueprint $table) {
            $table->id('identifier');
            $table->string('FullDate')->default('null');
            $table->string('UpdateDate')->default('null');
            $table->string('UploadDate')->default('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_dates');
    }
};
