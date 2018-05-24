<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tgl extends Model
{
    protected $fillable = ['waktupelaksanaan','tanggalberangkat','tanggalkembali','tempatberangkat','tempattujuan'];
    protected $table = 'tgls';
}
