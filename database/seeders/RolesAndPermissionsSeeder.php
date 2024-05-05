<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    $role = Role::create(['name' => 'Developer']);
    $role = Role::create(['name' => 'SuperAdmin']);
    $role = Role::create(['name' => 'Admin']);
    $role = Role::create(['name' => 'User']);
  }
}
