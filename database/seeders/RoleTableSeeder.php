<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'System Admin';
        $role->save();
        $role->permissions()->sync([1, 2, 3, 4, 5]);

        $role = new Role();
        $role->name = 'OA';
        $role->description = 'Owners Administation';
        $role->save();
        $role->permissions()->sync([1, 4]);

        $role = new Role();
        $role->name = 'Administrator';
        $role->description = 'OA Administrator';
        $role->save();
        $role->permissions()->sync([1, 2, 4]);

        $role = new Role();
        $role->name = 'Provider';
        $role->description = 'Service Provider';
        $role->save();
        $role->permissions()->sync([1, 4, 5]);
    }
}
