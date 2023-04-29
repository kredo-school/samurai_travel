<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->string('code', 6);
            $table->string('prefecture_code', 2);
            $table->string('name_en', 20)->nullable();
            $table->string('name_jp', 20)->nullable();
            $table->timestamps();

            $table->foreign('prefecture_code')->references('code')->on('prefectures');
            $table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
