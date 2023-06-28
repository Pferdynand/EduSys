<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller{
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user){
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function destroy(User $user){
        if($user->hasRole('admin')){
            return back()->with('message','No se puede eliminar a un usuario con rol administrador');
        }
        $user->delete();
        return back()->with('message','El usuario ha sido eliminado.');
    }

    public function assignRole(Request $request, User $user){
        $role = $request->role;
        if($user->hasRole($role)){
            return back()->with('message','El rol ya está asignado al usuario.');
        }
        $user->assignRole($role);
        return back()->with('message','El rol ha sido asignado con éxito.');
    }

    public function removeRole(User $user, Role $role){
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('message','El rol '.$role->name.' fue removido del usuario.');
        }
        return back()->with('message','No se puede remover el rol al usuario.');
    }

    public function givePermission(Request $request, User $user){
        if($user->hasPermissionTo($request->permission)){
            return back()->with('message','El usuario ya cuenta con ese permiso.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message','El permiso ha sido añadido al usuario.');
    }

    public function revokePermission(User $user, Permission $permission){
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return back()->with('message', 'El permiso '.$permission->name.' ha sido revocado del usuario.');
        }
        return back()->with('message','No se pudo revocar ese permiso del usuario.');
    }
}
