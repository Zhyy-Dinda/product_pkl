<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{

    public function index()
    {
        $layanan = Layanan::all();
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view("admin.content.layanan.index", compact("layanan","setting","data","user"));
    }


    public function create()
    {
        return view('admin.content.layanan.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
            'content' => 'required'
        ]);

        // check jika validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create data
        $data = Layanan::create([
            'title'     =>  $request->title,
            'content'   =>  $request->content
        ]);


        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Simpan!',
            'data'    => $data
        ]);
    }


    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
