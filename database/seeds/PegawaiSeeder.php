<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = Faker\Factory::create('id_ID');
        $limit = 15;

      	for ($i=0; $i < $limit ; $i++) { 
      		  $user = User::create([
              'name'     => $f->name,
              'email'    => $f->email,
              'password' => bcrypt('password'),
            ]);
            $user->roles()->attach(Role::where('id', $f->numberBetween($min=1,$max=3))->first());

            $pegawai = Pegawai::create([
              'user_id' => $user->id,
              'nip' => $f->numberBetween($min=10000,$max=1000000000),
              'pangkat' => 'Jendral',
              'golongan' => 'IVA',
              'jabatan' => 'Manager',
              'wilayah' => $f->city,
              'tempat' => $f->city,
              'tanggal' => $f->date($format = 'Y-m-d', $max = 'now'),
              'angkutan' => 'Pesawat Jet',
            ]);
      	}
    }
}
