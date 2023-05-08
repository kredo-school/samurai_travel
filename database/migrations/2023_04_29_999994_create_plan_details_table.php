<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->integer('day')->length(3);
            $table->unsignedBigInteger('place_id');
            $table->integer('sort_no')->length(3)->nullable();
            $table->timestamps();

            // $table->primary(['plan_id', 'day', 'place_id']);
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_details');
    }
}
