<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
   
    public function index()
    {
        $data = Panduan::all();
        $setting = Setting::first();
        $user = User::first();
        return view("admin.content.panduan", compact("data","setting","user"));
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
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function show(Panduan $panduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Panduan $panduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panduan $panduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panduan $panduan)
    {
        //
    }
}
