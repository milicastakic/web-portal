<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKategorijaIdToObjaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objave', function (Blueprint $table) {
            $table->integer('kategorijaId')->unsigned();

            $table->foreign('kategorijaId')->references('id')->on('kategorijeSadrzaja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('objave', function (Blueprint $table) {
            $table->dropForeign(['kategorijaId']);
        });
    }
}
