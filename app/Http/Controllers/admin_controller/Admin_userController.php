<?php

namespace App\Http\Controllers\admin_controller;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class Admin_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin/utenti.elenco_utenti', compact('users'));
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
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function show(admin_user $admin_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_user $admin_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin_user $admin_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin_user  $admin_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_user $admin_user)
    {
        //
    }
}
