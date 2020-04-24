<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_user = Role::where('name','USUARIO')->first();
        $rol_admin = Role::where('name','ADMINISTRADOR')->first();

        $user = new User();
        $user->name = "USUARIO";
        $user->email = "Usuario@gmail.com";
        $user->password = bcrypt('123456789');
        $user->save();
        $user->roles()->attach($rol_user);

        $user = new User();
        $user->name = "ADMINISTRADOR";
        $user->email = "Administrador@gmail.com";
        $user->password = bcrypt('123456789');
        $user->save();
        $user->roles()->attach($rol_admin);
    }
}
