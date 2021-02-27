<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // create permissions
      Permission::create(['name' => 'edit']);
      Permission::create(['name' => 'delete']);
      Permission::create(['name' => 'view']);
      Permission::create(['name' => 'normal']);

      // create roles and assign created permissions

      // this can be done as separate statements
      $role = Role::create(['name' => 'user']);
      $role->givePermissionTo('view');

      // or may be done by chaining
      $role = Role::create(['name' => 'moderator'])
        ->givePermissionTo(['view', 'edit']);

      // or may be done by chaining
      $role = Role::create(['name' => 'company'])
        ->givePermissionTo(Permission::all());

      $role = Role::create(['name' => 'super-admin']);
      $role->givePermissionTo(Permission::all());
    }
}
