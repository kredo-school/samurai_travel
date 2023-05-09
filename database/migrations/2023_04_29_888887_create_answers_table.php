<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->integer('answer_no')->length(3);
            $table->text('answer');
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->unsignedBigInteger('keyword_id')->nullable();
            $table->timestamps();

            // $table->primary(['question_id', 'answer_no']);
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
