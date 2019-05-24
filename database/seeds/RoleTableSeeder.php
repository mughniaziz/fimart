<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Make Role Kasir
        $role_kasir = new Role();
        $role_kasir->name = 'kasir';
        $role_kasir->description = 'Akun Untuk Kasir';
        $role_kasir->save();

        //Make Role Admin
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Akun Untuk Admin';
        $role_admin->save();
    }
}
