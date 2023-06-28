<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller{
    public function index(){
        $roles = Role::whereNotIn('name', ['admin'])->get();;
        return view('admin.roles.index', compact('roles'));
    }
    public function create(){
        return view('admin.roles.create')->with('message','Un nuevo rol ha sido creado.');
    }
    public function store(Request $request){
        $validate = $request -> validate(['name' => ['required', 'min:3']]);
        Role::create($validate);
        return to_route('admin.roles.index');
    }
    public function edit(Role $role){
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }
    public function update(Request $request, Role $role){
        $validate = $request -> validate(['name' => ['required', 'min:3']]);
        $role->update($validate);
        return to_route('admin.roles.index')->with('message','El rol ha sido actualizado con éxito.');
    }
    public function destroy(Role $role){
        $role -> delete();
        return back()->with('message','El rol ha sido eliminado.');
    }
    public function givePermission(Request $request, Role $role){
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','El rol ya cuenta con ese permiso.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message','El permiso ha sido añadido al rol.');
    }
    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('message', 'El permiso '.$permission->name.' ha sido revocado del rol.');
        }
        return back()->with('message','No se pudo revocar ese permiso del rol.');
    }
}
