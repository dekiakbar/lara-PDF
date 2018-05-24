<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTglsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('waktupelaksanaan');
            $table->string('tanggalberangkat');
            $table->string('tanggalkembali');
            $table->string('tempatberangkat');
            $table->string('tempattujuan');
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
        Schema::dropIfExists('tgls');
    }
}
