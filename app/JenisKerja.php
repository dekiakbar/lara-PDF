<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKerja extends Model
{
	protected $fillable = [
		'kode_prog','program','kode_keg','kegiatan','kode_output','output','kode_komponen','komponen',
		'sub_komp','kode_akun','akun','volume','akun','detail','seksi','index','bulan','tahun','keterangan'
	];
	
    protected $table ='jenis_kerjas';
}
