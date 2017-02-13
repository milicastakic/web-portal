<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNazivKategorijeToObjaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objave', function (Blueprint $table) {
            $table->string('nazivKategorije');
        });

        Schema::table('objave', function($table) {
            $table->foreign('nazivKategorije')->references('naziv')->on('kategorijeSadrzaja')->onDelete('cascade');
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
            $table->dropColumn('nazivKategorije');
        });
    }
}
