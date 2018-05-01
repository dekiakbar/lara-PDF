<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
    	'user_id','nip','pangkat','golongan','jabatan','wilayah','tempat','tanggal','angkutan'
    ];

    protected $table = 'pegawais';

    public function users()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
