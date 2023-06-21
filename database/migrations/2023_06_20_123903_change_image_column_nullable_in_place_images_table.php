<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeImageColumnNullableInPlaceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('place_images', function (Blueprint $table) {
            $table->string('image',255)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('place_images', function (Blueprint $table) {
            DB::table('place_images')->whereNull('image')->update(['image' => '']);
            $table->string('image',255)->nullable(false)->change();
        });
    }
}
