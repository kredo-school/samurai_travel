<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceAffiliateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_affiliate_sites', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('affiliate_id');
            $table->integer('price');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliate_sites')->onDelete('cascade');
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
        Schema::dropIfExists('place_affiliate_sites');
    }
}
