<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller{
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
    public function create(){
        return view('admin.permissions.create')->with('message','Un nuevo permiso ha sido creado.');
    }
    public function store(Request $request){
        $validate = $request -> validate(['name' => ['required', 'min:3']]);
        Permission::create($validate);
        return to_route('admin.permissions.index');
    }
    public function edit(Permission $permission){
        return view('admin.permissions.edit',compact('permission'));
    }
    public function update(Request $request, Permission $permission){
        $validate = $request -> validate(['name' => ['required', 'min:3']]);
        $permission->update($validate);
        return to_route('admin.permissions.index')->with('message','El permiso ha sido actualizado con éxito.');
    }
    public function destroy(Permission $permission){
        $permission->delete();
        return back()->with('message','El permiso ha sido eliminado.');
    }
}