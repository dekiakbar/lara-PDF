<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    $role_root 		= Role::where('name', 'Super Admin')->first();
	    // $role_admin  	= Role::where('name', 'Admin')->first();
	    // $role_user		= Role::where('name', 'User')->first();

	    // $superAdmin = new User();
	    // $superAdmin->name = 'Super Admin';
	    // $superAdmin->email = 'superAdmin@superAdmin.com';
	    // $superAdmin->password = bcrypt('password');
	    // $superAdmin->save();
	    // $superAdmin->roles()->attach($role_root);

	    // $Admin = new User();
	    // $Admin->name = 'Admin';
	    // $Admin->email = 'admin@admin.com';
	    // $Admin->password = bcrypt('password');
	    // $Admin->save();
	    // $Admin->roles()->attach($role_admin);

	    // $User = new User();
	    // $User->name = 'User';
	    // $User->email = 'user@user.com';
	    // $User->password = bcrypt('password');
	    // $User->save();
	    // $User->roles()->attach($role_user);
    }
}
