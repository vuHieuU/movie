<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\userRequest;
use App\Http\Requests\admin\userUpdateRequest;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::whereDoesntHave('roles')->orderByDesc("created_at")->get();
        return view('admin.users.index',compact('user'));
    }

    public function admin_index(){
        $admins = User::whereHas('roles')->orderByDesc("created_at")->get();
        return view('admin.users.admin.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all()->groupBy('group');
        return view('admin.users.admin.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersCreate = $request->all();
        $usersCreate['password'] = Hash::make($request->password);
        $user = User::create($usersCreate);
        $modelType = $user->getMorphClass();
        $user->roles()->attach($usersCreate['role_ids'] ?? [],['model_type' => $modelType]);
        return redirect()->route('index_admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::FindOrFail($id);
        $role = Role::all()->groupBy('group');
        return view('admin.users.show',compact('user','role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::FindOrFail($id);
        $role = Role::all()->groupBy('group');
        return view('admin.users.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userUpdate = $request->except('password');
        $user = User::FindOrFail($id);
        if($request->password){
             $userUpdate['password'] = Hash::make($request->password);
        }
        $user->update($userUpdate);
        $user->roles()->sync($userUpdate['role_ids'] ?? []);
        return redirect()->route('index_user');
    }

    public function edit_admin(string $id)
    {
        $user = User::FindOrFail($id);
        $role = Role::all()->groupBy('group');
        return view('admin.users.admin.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_admin(Request $request, string $id)
    {
        $userUpdate = $request->except('password');
        $user = User::FindOrFail($id);
        if($request->password){
             $userUpdate['password'] = Hash::make($request->password);
        }
        $modelType = $user->getMorphClass();
        $user->roles()->sync($userUpdate['role_ids'] ?? [], ['model_type' => $modelType]);        
        return redirect()->route('index_admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::FindOrFail($id);
        $user->delete($id);
        return redirect()->route('index_user');
    }
    public function destroy_admin(string $id)
    {
        $user = User::FindOrFail($id);
        $user->delete($id);
        return redirect()->route('index_admin');
    }

}
