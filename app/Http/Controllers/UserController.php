<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {           
         $user = User::orderBy('created_at', 'ASC')->paginate();
 
         return view('administracion.users.index', compact('user'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
                  $roles = Role::all()->pluck('name');

         //se dirige a la vista de crear
         return view('administracion.users.create', [
             'user' => new User,
             'roles' => $roles
         ]);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\CreateUserRequest  $request
      * @return \Illuminate\Http\Response
      */
     public function store(CreateUserRequest $request)
     {
         $user = User::create($request->validated());
        //  $user->roles()->attach($request->roles);
 
 
         return redirect()->route('users.index')->with('success', 'El usuario fue agregado');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         // busca usuario
         $user = User::findOrFail($id);
         //se muestra el nombre del rol
         $roles = Role::pluck('name','id');
         $permissions = Permission::pluck('name','id');
         //retorna la vista
         return view('administracion.users.edit', [
             'user' => $user,
             'roles' => $roles,
             'permissions' => $permissions
         ]);
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\UpdateUserRequest  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(UpdateUserRequest $request, $id)
     {        
         // busca usuario
         $user = User::findOrFail($id);
         //actualiza el usuario
         $user->update($request->validated());
         //se utiliza sync para sincronizar roles y evitar duplicacion de roles
         $user->roles()->sync($request->roles);
         $user->permissions()->sync($request->permissions);
        //retornamos la vista luego de actualizar
         return redirect()->route('users.index')->with('success', 'El usuario fue actualizado');
     }
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(User $user)
     {
         //se selecciona el user y elimina
         $user->delete();
         //se redirige a la pantalla asignada
         return redirect()->route('users.index')->with('success', 'El usuario fue eliminado');
     }
 }