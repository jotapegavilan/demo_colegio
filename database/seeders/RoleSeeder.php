<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 =Role::create(['name' =>'admin']);
        $role2 =Role::create(['name' =>'encargado']);
        $role3 =Role::create(['name' =>'apoderado']);

        $permission1 = Permission::create(['name' => 'admin.index']);       

        $permission2 = Permission::create(['name' => 'admin.cursos.index']);
        $permission3 = Permission::create(['name' => 'admin.cursos.create']);
        $permission4 = Permission::create(['name' => 'admin.cursos.edit']);
        $permission5 = Permission::create(['name' => 'admin.cursos.delete']);
        
        $permission6 = Permission::create(['name' => 'admin.postulantes.index']);
        $permission7 = Permission::create(['name' => 'admin.postulantes.create']);
        $permission8 = Permission::create(['name' => 'admin.postulantes.edit']);
        $permission9 = Permission::create(['name' => 'admin.postulantes.delete']);

        $permission10 = Permission::create(['name' => 'admin.users.index']);
        $permission11 = Permission::create(['name' => 'admin.users.create']);
        $permission12 = Permission::create(['name' => 'admin.users.edit']);
        $permission13 = Permission::create(['name' => 'admin.users.delete']);

        $permission14 = Permission::create(['name' => 'admin.apoderados.index']);
        $permission15 = Permission::create(['name' => 'admin.apoderados.create']);
        $permission16 = Permission::create(['name' => 'admin.apoderados.edit']);
        $permission17 = Permission::create(['name' => 'admin.apoderados.delete']);
    
        $permission1->syncRoles([$role1,$role2,$role3]);
        $permission2->syncRoles([$role1,$role2]);
        $permission3->syncRoles([$role1,$role2]);
        $permission4->syncRoles([$role1,$role2]);
        $permission5->syncRoles([$role1,$role2]);
        $permission6->syncRoles([$role1,$role2,$role3]);
        $permission7->syncRoles([$role1,$role2,$role3]);
        $permission8->syncRoles([$role1,$role2,$role3]);
        $permission9->syncRoles([$role1,$role2,$role3]);
        $permission10->syncRoles([$role1,$role2]);
        $permission11->syncRoles([$role1]);
        $permission12->syncRoles([$role1]);
        $permission13->syncRoles([$role1]);
        $permission14->syncRoles([$role1,$role2]);
        $permission15->syncRoles([$role1,$role2]);
        $permission16->syncRoles([$role1,$role2]);
        $permission17->syncRoles([$role1,$role2]);

        

    }
}
