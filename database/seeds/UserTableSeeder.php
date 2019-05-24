<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //initiate the Role
        $role_kasir = Role::where('name','kasir')->first();
        $role_admin = Role::where('name','admin')->first();

        //Seed User Kasir
        $kasir = new User();
        $kasir->name = 'Kasir';
        $kasir->email = 'kasir@fimart.sch.id';
        $kasir->password = bcrypt('kasirs');
        $kasir->save();
        $kasir->roles()->attach($role_kasir);

        //Seed User Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@fimart.sch.id';
        $admin->password = bcrypt('admins');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
