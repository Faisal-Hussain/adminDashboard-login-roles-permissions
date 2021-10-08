<?php

namespace App\Http\Controllers\Admin\Spatie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function roles(Request $request)
    {

        $roles = Role::with('permissions')->get();
        $permissions = Permission::get();

        return view('admin.spatie.roles',get_defined_vars());
        
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return Redirect()->route('admin.roles')->with('success', 'New role has been created.');
    }

}
