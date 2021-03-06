<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); // INTEGER UNSIGNED - AUTOINCREMENT
            //$table->unsignedInteger('profession_id');
            //$table->foreign('profession_id')->references('id')->on('professions');
            $table->string('name'); // VARCHAR
            $table->string('email', 30)->unique(); // VARCHAR - UNIQUE
            // $table->string('profession', 50)->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            //$table->string('website')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
}
