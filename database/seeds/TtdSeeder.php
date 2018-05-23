<?php

use Illuminate\Database\Seeder;

use App\Ttd;

class TtdSeeder extends Seeder
{

    public function run()
    {
        DB::table('ttds')->insert([
        	'nama' => 'Ir. Sucipto Diningrat',
        	'nip' => '0918227738374938',
        	'jabatan' => 'Kepala Badan Pusat Statistik',
        ]);
    }
}
