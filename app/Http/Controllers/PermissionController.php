<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('admin.permission.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);
        //create permission
        Permission::create([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('success', 'Permission Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('admin.permission.edit', ['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,' . $permission->id,
            ]
        ]);
        //create permission
        $permission->update([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('success', 'Permission Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($permissionId)
    {
        $permissionDeleteRecord = Permission::findById($permissionId);
        $permissionDeleteRecord->delete();
        $data = [
            'success' => true,
            'message' => 'Permission deleted successfully',
            'route' => route('permissions.index')
        ];
        return $data;
    }
}
