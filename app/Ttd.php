<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ttd extends Model
{
    protected $fillable = ['nama','nip','jabatan'];
    protected $table = 'ttds';
}
