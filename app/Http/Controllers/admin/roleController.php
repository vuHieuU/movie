<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = role::get();
        return view('admin.roles.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = permission::all()->groupBy('group');
        return view('admin.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create_role = $request->all();
        $create_role['guard_name'] = str_shuffle(uniqid());
        $role = role::create($create_role);
        $role->permissions()->attach($create_role['permission_ids'] ?? []);
        return redirect('role/index')->with(['message'=>'create success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = role::find($id);
        $permissions = permission::all()->groupBy('group');
        return view('admin.roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = role::findOrFail($id);
        $updateData = $request->all();
        $role->update($updateData);
        $role->permissions()->sync($updateData['permission_ids'] ?? []);
        return redirect('role/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = role::findOrFail($id);
        $role->delete($id);
        return redirect('role/index');
    }
}
