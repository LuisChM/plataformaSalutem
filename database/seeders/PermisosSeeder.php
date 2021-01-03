<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        array_push($permissions_array, Permission::create(['name' => 'create_Facturas']));
        array_push($permissions_array, Permission::create(['name' => 'edit_Facturas']));
        array_push($permissions_array, Permission::create(['name' => 'delete_Facturas']));
        $viewFacturasPermission = Permission::create(['name' => 'view_Facturas']);
        array_push($permissions_array, $viewFacturasPermission);
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole->syncPermissions($permissions_array);
        $viewFacturasRole = Role::create(['name' => 'view_Facturas']);
        $viewFacturasRole->givePermissionTo($viewFacturasPermission);

        $userSuperAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //assign role
        $userSuperAdmin->assignRole('super_admin');

        //create user
        $userViewFacturas = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //assign role
        $userViewFacturas->assignRole('view_Facturas');
        
        User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('admin'),
        ]);

         //user
         Permission::create(['name' => 'view_roles']);
         Permission::create(['name' => 'edit_roles']);
         Permission::create(['name' => 'delete_roles']);
         Permission::create(['name' => 'create_roles']);
         //roles
         Permission::create(['name' => 'view_users']);
         Permission::create(['name' => 'create_users']);
         Permission::create(['name' => 'edit_users']);
         Permission::create(['name' => 'delete_users']);
    }
}
