<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTailorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailorClothes', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('name');
            $table -> string('color');
            $table -> string('texture');
            $table -> string('quality');
            $table -> float('price');
            $table -> string('material');

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
        Schema::dropIfExists('tailorClothes');
    }
}
