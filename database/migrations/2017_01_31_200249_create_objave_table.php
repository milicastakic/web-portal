<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objave', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('tekst');
            $table->string('slika');
            $table->foreign('nazivKategorije')>references('naziv')->on('kategorijeSadrzaja')->onDelete('cascade');
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
        Schema::dropIfExists('objave');
    }
}
