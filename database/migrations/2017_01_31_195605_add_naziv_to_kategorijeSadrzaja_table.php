<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNazivToKategorijeSadrzajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategorijeSadrzaja', function (Blueprint $table) {
            $table->string('naziv')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategorijeSadrzaja', function (Blueprint $table) {
            $table->dropColumn('naziv');
        });
    }
}
