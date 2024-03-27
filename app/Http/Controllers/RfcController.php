<?php

namespace App\Http\Controllers;

use App\Models\rfc;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  rfc::orderBy("created_at","desc")->paginate(10);
        $setting = Setting::first();
        $user = User::all();
        return view("admin.content.rfc.rfc", compact("data","setting","user"));
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
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function show(rfc $rfc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function edit(rfc $rfc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rfc $rfc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rfc $rfc)
    {
        //
    }
}
