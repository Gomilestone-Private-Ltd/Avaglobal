<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view-users', ['only' => 'index']);
        $this->middleware('permission:add-users', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-users', ['only' => 'edit']);
        $this->middleware('permission:update-users', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-users', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::get();
        return view('admin.users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|string|max:255',
        //     'roles' => 'required',
        // ]);

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|max:255',
            'roles' => 'required',

        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validate);
        }


        //create permission
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->syncRoles($request->roles);
        return redirect()->route('users.index')->with('success', 'User Created Sucessfully With Roles');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name')->all();
        $userRoles = $user->roles->pluck('name', 'name')->all();
        return view('admin.users.edit', ['user' => $user, 'roles' => $roles, 'userRoles' => $userRoles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email',
            'password' => 'nullable|string|max:255',
        ]);
        //create permission
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        $user->syncRoles($request->roles);
        return redirect()->route('users.index')->with('success', 'User Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userId)
    {
        $userDeleteRecord = User::findOrFail($userId);
        $userDeleteRecord->delete();
        $data = [
            'success' => true,
            'message' => 'User deleted successfully',
            'route' => route('users.index')
        ];
        return $data;
    }
}
