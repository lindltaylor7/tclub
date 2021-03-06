<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'CEO']);

        Permission::create(['name'=>'edit.cities'])->assignRole($role1);
        Permission::create(['name'=>'edit.rubros'])->assignRole($role1);
        Permission::create(['name'=>'edit.empresas'])->assignRole($role1);
        Permission::create(['name'=>'edit.usuarios'])->assignRole($role1);
        Permission::create(['name'=>'edit.ofertas_usuario'])->assignRole($role1);
    }
}
