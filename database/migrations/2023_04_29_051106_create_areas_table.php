<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->string('code',2)
                    ->comment('1:Hokkaido 2:Tohoku 3:Kanto 4:Chubu 5:Kinki 6:Chugoku 7:Shikoku 8:Kyushu 9:Okinawa');
            $table->string('name_en', 20)->nullable();
            $table->string('name_jp', 20)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('areas');
    }
}
