<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\UserHome;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view("admin.home.components.app", compact("setting"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserHome $userHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserHome $userHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserHome $userHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserHome $userHome)
    {
        //
    }
}
