<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kode_prog');
            $table->text('program');
            $table->text('kode_keg');
            $table->text('kegiatan');
            $table->text('kode_output');
            $table->text('output');
            $table->text('kode_komponen');
            $table->text('komponen');
            $table->text('sub_komp');
            $table->text('kode_akun');
            $table->text('akun');
            $table->text('volume');
            $table->text('detail');
            $table->text('seksi');
            $table->text('index');
            $table->text('bulan');
            $table->text('tahun');
            $table->text('keterangan');
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
        Schema::dropIfExists('jenis_kerjas');
    }
}
