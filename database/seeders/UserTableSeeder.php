<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Loxer";
        $user->email = "loxer@mail.com";
        $user->password = bcrypt('12345678');
        $user->slug = $user->name.time();
        $user->avatar = "default.svg";
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Consorcio1";
        $user->email = "consorcio1@mail.com";
        $user->password = bcrypt('12345678');
        $user->slug = $user->name.time();
        $user->avatar = "default.svg";
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = "Administrador1";
        $user->email = "administrador1@mail.com";
        $user->password = bcrypt('12345678');
        $user->slug = $user->name.time();
        $user->avatar = "default.svg";
        $user->role_id = 3;
        $user->save();

        $user = new User();
        $user->name = "Proveedor1";
        $user->email = "proveedor1@mail.com";
        $user->password = bcrypt('12345678');
        $user->slug = $user->name.time();
        $user->avatar = "default.svg";
        $user->role_id = 4;
        $user->save();
    }
}
