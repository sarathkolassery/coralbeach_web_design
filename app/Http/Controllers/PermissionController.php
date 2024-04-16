<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions', compact('permissions'));
    }
    
    public function store(Request $req)
    {
        // dd($req->name);
        $req->validate([
            'name' => [
                'required',
                'string'
            ]
        ]);
        Permission::create(['name' => $req->name]);
        return redirect('/permissions');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.edit-permission', compact('permission'));
    }

    public function update(Request $req)
    {
        // dd($req->id);
        $req->validate([
            'name' => [
                'required',
                'string'
            ]
        ]);

        Permission::find($req->id)->update(['name' => $req->name]);
        return redirect('/permissions');
    }

    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect('/permissions');
    }
}
