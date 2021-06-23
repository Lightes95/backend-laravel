<?php

namespace App\Http\Controllers\admin_controller;

use App\Http\Controllers\Controller;
use App\Models\book;
use Illuminate\Http\Request;

class Admin_bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return $books;
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
     * @param  \App\Models\admin_book  $admin_book
     * @return \Illuminate\Http\Response
     */
    public function show(admin_book $admin_book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin_book  $admin_book
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_book $admin_book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin_book  $admin_book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin_book $admin_book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin_book  $admin_book
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_book $admin_book)
    {
        //
    }
}
