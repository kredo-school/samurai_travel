<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_keywords', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('keyword_id');
            $table->timestamps();

            $table->primary(['place_id', 'keyword_id']);
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');;
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_keywords');
    }
}
