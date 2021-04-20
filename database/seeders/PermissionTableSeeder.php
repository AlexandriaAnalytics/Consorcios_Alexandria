<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name = 'view_proyects';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'manage_proyects';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'manage_users';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'view_quote';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'manage_quote';
        $permission->save();
    }
}
