<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->integer('place_div')->length(1)
                    ->comment('1:spot 2:activity 3:restaurant 4:hotel');
            $table->string('name_en')->nullable();
            $table->string('name_jp')->nullable();
            $table->timestamp('opening_time')->nullable();
            $table->timestamp('ending_time')->nullable();
            $table->text('url')->nullable();
            $table->string('area_code', 2)->nullable();
            $table->string('prefecture_code', 2)->nullable();
            $table->string('city_code', 6)->nullable();
            $table->string('address');
            $table->integer('spend_time')->length(4);
            $table->timestamps();

            $table->foreign('area_code')->references('code')->on('areas');
            $table->foreign('prefecture_code')->references('code')->on('prefectures');
            $table->foreign('city_code')->references('code')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
