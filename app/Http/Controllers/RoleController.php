<?php

namespace App\Http\Controllers;

use App\Models\Role as ModelsRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view-roles', ['only' => 'index']);
        $this->middleware('permission:add-roles', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-role-permissions', ['only' => ['update', 'edit', 'addPermissionToRole', 'givePermissionToRole']]);
        $this->middleware('permission:update-role-permissions', ['only' => ['givePermissionToRole']]);
        $this->middleware('permission:delete-roles', ['only' => 'destroy']);
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

        $requestData = $request->only('name');

        $rule = [

            'name' => 'required|string|max:30|unique:roles,name',

        ];

        $message = [
            'name.required' => 'Please add role name',
            'name.unique' => 'This role name already exists',
            'name.max' => 'Role name must be less than 30 characters'
        ];

        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return redirect('/admin/roles/create')
                ->withErrors($validate)
                ->withInput();
        }

        // $validated = $request->validate([
        //     'name' => 'required|string|unique:roles,name',
        // ]);
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
        $groupedPermissionRecords = Permission::orderBy('id', 'desc')->get()->groupBy('group_name');
        $allPermissions = Permission::pluck('name', 'id')->toArray();
        $role = Role::findOrFail($roleId);
        $roleHasPermissions = ModelsRole::roleHasPermissions($role, $allPermissions);
        return view('admin.role.add-permissions', ['role' => $role, 'permissions' => $allPermissions, 'roleHasPermissions' => $roleHasPermissions, 'groupedPermissionRecords' => $groupedPermissionRecords]);
    }

    // public function givePermissionToRole(Request $request, $roleId)
    // {
    //     $request->validate([
    //         'permissions' => 'required'
    //     ]);
    //     $permissions = $request->permissions;
    //     $role = Role::findOrFail($roleId);
    //     $role->syncPermissions($permissions);
    //     return redirect()->back()->with('success', 'Permission added to the role');
    // }
    public function givePermissionToRole(Request $request, $roleId)
    {
        if (!empty($request->permissions)) {
            $requestPermissions = Permission::whereIn('name', $request->permissions)->pluck('name', 'id')->toArray();
            $allPermission = Permission::whereIn('name', $request->all_permissions)->pluck('name', 'id')->toArray();
            $keysDifferenceIdsToRevoke = array_keys(array_diff_key($allPermission, $requestPermissions));
            $keysDifferenceIdsToRevokePermissionsName = Permission::whereIn('id', $keysDifferenceIdsToRevoke)->pluck('name')->toArray();


            $requestPermissionsKeys = array_keys($requestPermissions);
            $requestPermissionsKeysName = Permission::whereIn('id', $requestPermissionsKeys)->pluck('name')->toArray();



            $requestEarlierPermissions = FacadesDB::table('role_has_permissions')->where('role_id', $roleId)->pluck('permission_id')->toArray();
            $requestEarlierPermissionsName = Permission::whereIn('id', $requestEarlierPermissions)->pluck('name')->toArray();
            // dd($requestEarlierPermissionsName);

            $combinedPermissionsToSync = array_unique(array_merge($requestEarlierPermissionsName, $requestPermissionsKeysName));
            // dd($combinedPermissionsToSync);

            $role = Role::findOrFail($roleId);
            foreach ($requestPermissionsKeys as $permissions) {
                if (in_array($permissions, $requestEarlierPermissions)) {
                    foreach ($keysDifferenceIdsToRevokePermissionsName as $revokePermission) {
                        $role->revokePermissionTo($revokePermission);
                    }
                    $requestEarlierPermissions = FacadesDB::table('role_has_permissions')->where('role_id', $roleId)->pluck('permission_id')->toArray();
                    $requestEarlierPermissionsName = Permission::whereIn('id', $requestEarlierPermissions)->pluck('name')->toArray();
                    $combinedPermissionsToSync = array_unique(array_merge($requestEarlierPermissionsName, $requestPermissionsKeysName));
                    $role->syncPermissions($combinedPermissionsToSync);
                } else {
                    $combinedPermissionsToSync = array_unique(array_merge($requestEarlierPermissionsName, $requestPermissionsKeysName));
                    $role->syncPermissions($combinedPermissionsToSync);
                }
            }
            return redirect()->back()->with('success', 'Permission added to the role');
        } else {
            $allPermission = array_keys(Permission::whereIn('name', $request->all_permissions)->pluck('name', 'id')->toArray());

            $keysDifferenceIdsToRevokePermissionsName = Permission::whereIn('id', $allPermission)->pluck('name')->toArray();


            $requestEarlierPermissions = FacadesDB::table('role_has_permissions')->where('role_id', $roleId)->pluck('permission_id')->toArray();
            $requestEarlierPermissionsName = Permission::whereIn('id', $requestEarlierPermissions)->pluck('name')->toArray();
            $combinedPermissionsToSync = array_unique(array_merge($requestEarlierPermissionsName, $keysDifferenceIdsToRevokePermissionsName));
            // dd($keysDifferenceIdsToRevokePermissionsName, $allPermission);
            $role = Role::findOrFail($roleId);
            foreach ($allPermission as $permission) {
                if (in_array($permission, $requestEarlierPermissions)) {
                    foreach ($keysDifferenceIdsToRevokePermissionsName as $revokePermission) {
                        $role->revokePermissionTo($revokePermission);
                    }
                    $requestEarlierPermissions = FacadesDB::table('role_has_permissions')->where('role_id', $roleId)->pluck('permission_id')->toArray();
                    $requestEarlierPermissionsName = Permission::whereIn('id', $requestEarlierPermissions)->pluck('name')->toArray();
                    $role->syncPermissions($requestEarlierPermissionsName);
                    return redirect()->back()->with('success', 'Permission added to the role');
                }
            }
        }



        // dd($combinedPermissionsToSync, $keysDifferenceIdsToRevoke);
        //need to revoke keysDifferenceIdsToRevoke from requestEarlierPermissions if keysDifferenceIdsToRevoke found revoke them
        //and again get requestEarlierPermissions now merge it with requestPermissions and get unique and sync them

    }



    public function getSearch(Request $request)
    {
        $roleId = $request->roleId;
        $search = $request->search;
        if (!empty($search)) {
            $groupedPermissionRecords = Permission::where('group_name', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->get()
                ->groupBy('group_name');
        } else {
            $groupedPermissionRecords = Permission::orderBy('id', 'desc')->get()->groupBy('group_name');
        }

        $allPermissions = Permission::pluck('name', 'id')->toArray();
        $role = Role::findOrFail($roleId);
        $roleHasPermissions = ModelsRole::roleHasPermissions($role, $allPermissions);

        // return redirect('admin/roles/' . $roleId . '/give-permissions')->with([
        //     'role' => $role,
        //     'permissions' => $allPermissions,
        //     'roleHasPermissions' => $roleHasPermissions,
        //     'groupedPermissionRecords' => $groupedPermissionRecords
        // ]);


        return view('admin.role.add-permissions', ['role' => $role, 'permissions' => $allPermissions, 'roleHasPermissions' => $roleHasPermissions, 'groupedPermissionRecords' => $groupedPermissionRecords]);
    }
}