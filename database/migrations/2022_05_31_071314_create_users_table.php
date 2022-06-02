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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id')->index();
            $table->string('username')->unique()->index();
            $table->string('password');
            $table->string('email')->default('null');
            $table->string('permissions')->default('null')->index();
            $table->rememberToken();
            $table->date('created_at');
            $table->date('edit_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
