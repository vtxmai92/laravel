<?php

namespace App\Http\Controllers;

use App\Permission;
use App\User;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::get();
    }

    public function attachUserRole($userId, $role)
    {
        $user = User::find($userId);

        $roleId = Role::where('name', $role)->first();

        $user->roles()->attach($roleId);

        return $user;
    }

    public function getUserRole($userId) {
        return User::find($userId)->roles;
    }

    public function attachRolePermission(Request $request)
    {
        $params = $request->only('permission', 'role');

        $permissionParam = $params['permission'];
        $roleParam = $params['role'];

        $permission = Permission::find('name', $permissionParam)->first();
        $role = Role::find('name', $roleParam)->first();

        $role->attachPermission($permission);

        return $this->response->created();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
