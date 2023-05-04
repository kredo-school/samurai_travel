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
            $table->enum('place_category', ['spot', 'activity', 'restaurant', 'hotel']);
            $table->string('name_en')->nullable();
            $table->string('name_jp')->nullable();
            $table->timestamp('opening_time')->nullable();
            $table->timestamp('ending_time')->nullable();
            $table->text('url')->nullable();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('prefecture_id');
            $table->unsignedBigInteger('city_id');
            $table->string('address');
            $table->integer('spend_time')->length(4);
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('prefecture_id')->references('id')->on('prefectures');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->softDeletes();
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
