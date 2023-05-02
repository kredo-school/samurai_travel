<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nick_name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age')->length(3)->nullable();
            $table->integer('gender')->length(1)->nullable()
                    ->comment('1:male 2:female 3:other');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('status')->length(1)->nullable()
                    ->comment('1:active o:inactive');
            $table->unsignedBigInteger('role_id')
                    ->default(1)
                    ->comment('1:user 2:admin');
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
