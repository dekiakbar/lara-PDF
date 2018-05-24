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

        $role_root    = Role::where('name', 'Super Admin')->first();
        $role_admin   = Role::where('name', 'Admin')->first();
        $role_user    = Role::where('name', 'User')->first();


        $superAdmin = new User();
        $superAdmin->name = $f->name;
        $superAdmin->email = 'superAdmin@superAdmin.com';
        $superAdmin->password = bcrypt('password');
        $superAdmin->save();
        $superAdmin->roles()->attach($role_root);

            $pegawai = Pegawai::create([
              'user_id' => $superAdmin->id,
              'nip' => $f->numberBetween($min=10000,$max=1000000000),
              'pangkat' => 'Jendral',
              'golongan' => 'IVA',
              'jabatan' => 'Manager',
              'wilayah' => $f->city,
              'tempat' => $f->city,
              'tanggal' => $f->date($format = 'Y-m-d', $max = 'now'),
              'angkutan' => 'Pesawat Jet',
            ]);

        $Admin = new User();
        $Admin->name = $f->name;
        $Admin->email = 'admin@admin.com';
        $Admin->password = bcrypt('password');
        $Admin->save();
        $Admin->roles()->attach($role_admin);

            $pegawai = Pegawai::create([
              'user_id' => $Admin->id,
              'nip' => $f->numberBetween($min=10000,$max=1000000000),
              'pangkat' => 'Jendral',
              'golongan' => 'IVA',
              'jabatan' => 'Manager',
              'wilayah' => $f->city,
              'tempat' => $f->city,
              'tanggal' => $f->date($format = 'Y-m-d', $max = 'now'),
              'angkutan' => 'Pesawat Jet',
            ]);

        $User = new User();
        $User->name = $f->name;
        $User->email = 'user@user.com';
        $User->password = bcrypt('password');
        $User->save();
        $User->roles()->attach($role_user);

            $pegawai = Pegawai::create([
              'user_id' => $User->id,
              'nip' => $f->numberBetween($min=10000,$max=1000000000),
              'pangkat' => 'Jendral',
              'golongan' => 'IVA',
              'jabatan' => 'Manager',
              'wilayah' => $f->city,
              'tempat' => $f->city,
              'tanggal' => $f->date($format = 'Y-m-d', $max = 'now'),
              'angkutan' => 'Pesawat Jet',
            ]);


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
