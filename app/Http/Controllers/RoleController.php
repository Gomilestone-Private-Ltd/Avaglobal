<?php

namespace App\Http\Controllers;

use App\Models\Role as ModelsRole;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view-role', ['only' => 'index']);
        $this->middleware('permission:create-role', ['only' => ['create', 'store', 'addPermissionToRole', 'givePermissionToRole']]);
        $this->middleware('permission:update-role', ['only' => ['update', 'edit']]);
        $this->middleware('permission:delete-role', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        return view('admin.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);
        //create permission
        Role::create([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('success', 'Role Created Sucessfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $role->id,
            ]
        ]);
        //create permission
        $role->update([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('success', 'Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roleId)
    {
        $roleDeleteRecord = Role::findById($roleId);
        $roleDeleteRecord->delete();
        $data = [
            'success' => true,
            'message' => 'Role deleted successfully',
            'route' => route('roles.index')
        ];
        return $data;
    }

    public function addPermissionToRole($roleId)
    {
        $allPermissions = Permission::pluck('name', 'id')->toArray();
        $role = Role::findOrFail($roleId);
        $roleHasPermissions = ModelsRole::roleHasPermissions($role, $allPermissions);
        return view('admin.role.add-permissions', ['role' => $role, 'permissions' => $allPermissions, 'roleHasPermissions' => $roleHasPermissions]);
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        $request->validate([
            'permissions' => 'required'
        ]);
        $permissions = $request->permissions;
        $role = Role::findOrFail($roleId);
        $role->syncPermissions($permissions);
        return redirect()->back()->with('success', 'Permission added to the role');
    }
}
