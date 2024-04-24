<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string']
        ]);

        Role::create(['name' => $req->name]);
        return redirect('/roles');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.edit-role', compact('role'));
    }

    public function update(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string']
        ]);

        Role::find($req->id)->update(['name' => $req->name]);
        return redirect('roles');
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect('/roles');
    }

    public function addpermissionntorolesview($id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();
        return view('admin.role-permissions', compact('permissions','role','rolePermissions'));
    }

    public function givepermissiontorole(Request $req, $roleid)
    {
        $req->validate([
            'permission' => 'required'
        ]);

        $role = Role::find($roleid);
        $role->syncPermissions($req->permission);

        return redirect()->back();
    }
}
