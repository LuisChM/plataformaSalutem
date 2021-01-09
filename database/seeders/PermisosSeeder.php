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
        //Permisos//

        //usuarios
        $permissions_usuarios = [];
        array_push($permissions_usuarios, Permission::create(['name' => 'Ver usuarios']));
        array_push($permissions_usuarios, Permission::create(['name' => 'Crear usuarios']));
        array_push($permissions_usuarios, Permission::create(['name' => 'Editar usuarios']));
        array_push($permissions_usuarios, Permission::create(['name' => 'Eliminar usuarios']));
        //roles
        $permissions_roles = [];
        array_push($permissions_roles, Permission::create(['name' => 'Ver roles']));
        array_push($permissions_roles, Permission::create(['name' => 'Crear roles']));
        array_push($permissions_roles, Permission::create(['name' => 'Editar roles']));
        array_push($permissions_roles, Permission::create(['name' => 'Eliminar roles']));
        //productos
        $permissions_productos = [];
        array_push($permissions_productos, Permission::create(['name' => 'Ver productos']));
        array_push($permissions_productos, Permission::create(['name' => 'Crear productos']));
        array_push($permissions_productos, Permission::create(['name' => 'Editar productos']));
        array_push($permissions_productos, Permission::create(['name' => 'Eliminar productos']));
        //retirarProductos
        $permissions_retirarProductos = [];
        array_push($permissions_retirarProductos, Permission::create(['name' => 'Ver retiro de productos']));
        // array_push($permissions_retirarProductos, Permission::create(['name' => 'Crear retiro de productos']));
        array_push($permissions_retirarProductos, Permission::create(['name' => 'Editar retiro de productos']));
        // array_push($permissions_retirarProductos, Permission::create(['name' => 'Eliminar retiro de productos']));
        //facturas
        $permissions_facturas = [];
        array_push($permissions_facturas, Permission::create(['name' => 'Ver facturas']));
        array_push($permissions_facturas, Permission::create(['name' => 'Crear facturas']));
        array_push($permissions_facturas, Permission::create(['name' => 'Editar facturas']));
        array_push($permissions_facturas, Permission::create(['name' => 'Eliminar facturas']));
        //consultaNutricional
        $permissions_consultaNutricional = [];
        array_push($permissions_consultaNutricional, Permission::create(['name' => 'Ver consulta nutricional']));
        array_push($permissions_consultaNutricional, Permission::create(['name' => 'Crear consulta nutricional']));
        array_push($permissions_consultaNutricional, Permission::create(['name' => 'Editar consulta nutricional']));
        array_push($permissions_consultaNutricional, Permission::create(['name' => 'Eliminar consulta nutricional']));
        //pacientes
        $permissions_pacientes = [];
        array_push($permissions_pacientes, Permission::create(['name' => 'Ver pacientes']));
        array_push($permissions_pacientes, Permission::create(['name' => 'Crear pacientes']));
        array_push($permissions_pacientes, Permission::create(['name' => 'Editar pacientes']));
        array_push($permissions_pacientes, Permission::create(['name' => 'Eliminar pacientes']));
        //planNutricional
        $permissions_planNutricional = [];
        array_push($permissions_planNutricional, Permission::create(['name' => 'Ver plan nutricional']));
        array_push($permissions_planNutricional, Permission::create(['name' => 'Crear plan nutricional']));
        array_push($permissions_planNutricional, Permission::create(['name' => 'Editar plan nutricional']));
        array_push($permissions_planNutricional, Permission::create(['name' => 'Eliminar plan nutricional']));
        //calculoDieta
        $permissions_calculoDieta = [];
        array_push($permissions_calculoDieta, Permission::create(['name' => 'Usar calculo de dieta']));
        //enviarCorreos
        $permissions_enviarCorreos = [];
        array_push($permissions_enviarCorreos, Permission::create(['name' => 'Usar envio de correos']));

        array_push(
            $permissions_usuarios,
            $permissions_roles,
            $permissions_productos,
            $permissions_retirarProductos,
            $permissions_facturas,
            $permissions_consultaNutricional,
            $permissions_pacientes,
            $permissions_planNutricional,
            $permissions_calculoDieta,
            $permissions_enviarCorreos
        );

        //Roles//
        
        //Rol Administrador
        $Administrador = Role::create(['name' => 'Administrador']);
        $Administrador->givePermissionTo(Permission::all());
        //Rol Nutricionista
        $Nutricionista = Role::create(['name' => 'Nutricionista']);
        $Nutricionista->givePermissionTo(
            $permissions_consultaNutricional,
            $permissions_pacientes,
            $permissions_planNutricional,
            $permissions_calculoDieta
        );
        //Rol Cocinero
        $Cocinero = Role::create(['name' => 'Cocinero']);
        $Cocinero->givePermissionTo(
            $permissions_productos,
            $permissions_retirarProductos
        );
        //Rol Paciente
        $Paciente = Role::create(['name' => 'Paciente']);
        $Paciente->givePermissionTo(['Ver plan nutricional', 'Ver consulta nutricional']);

        //Crear Usuarios//

        //create user
        $userAdministrador = User::create([
            'name' => 'admin',
            'email' => 'admin@g.com',
            'password' => Hash::make('123'),
        ]);
        //assign role
        $userAdministrador->assignRole('Administrador');

        //create user
        $userCocinero = User::create([
            'name' => 'cook',
            'email' => 'cook@g.com',
            'password' => Hash::make('123'),
        ]);
        //assign role
        $userCocinero->assignRole('Cocinero');

        //create user
        $userNutricionista = User::create([
            'name' => 'nutri',
            'email' => 'nutri@g.com',
            'password' => Hash::make('123'),
        ]);
        //assign role
        $userNutricionista->assignRole('Nutricionista');

        //create user
        $userPaciente1 = User::create([
            'name' => 'paciente1',
            'email' => 'paciente1@g.com',
            'password' => Hash::make('123'),
        ]);
        //assign role
        $userPaciente1->assignRole('Paciente');

        //create user
        $userPaciente2 = User::create([
            'name' => 'paciente2',
            'email'=> 'paciente2@g.com',
            'password' => Hash::make('123'),
        ]);
        //assign role
        $userPaciente2->assignRole('Paciente');
    }
}
