<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name ='ADMINISTRADOR';
        $role->description ='ADMINISTRADOR';
        $role->save();

        $role = new Role();
        $role->name ='USUARIO';
        $role->description ='USUARIO';
        $role->save();
    }
}
