<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin 
        $adminRole = new Role();
        $adminRole->name = "superadmin";
        $adminRole->display_name = "SuperAdmin";
        $adminRole->save();

        //Membuat role Dosen
        $dosenRole = new  Role();
        $dosenRole->name = "skpd";
        $dosenRole->display_name = "skpd";
        $dosenRole->save();
        
        //Membuat role Reader
        $mahasiswaRole = new  Role();
        $mahasiswaRole->name = "reader";
        $mahasiswaRole->display_name = "reader";
        $mahasiswaRole->save();
    }
}
