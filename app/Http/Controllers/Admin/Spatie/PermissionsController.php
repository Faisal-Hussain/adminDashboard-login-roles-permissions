<?php

namespace App\Http\Controllers\Admin\Spatie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{

    public function permissions(Request $request)
    {
    	$permissions = Permission::get();
        return view('admin.spatie.permissions',get_defined_vars());   
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);

        $permissions = Permission::create(['name' => $request->name]);
        

        return Redirect()->route('admin.permissions')->with('success', 'New Permission has been created.');
    }

}
