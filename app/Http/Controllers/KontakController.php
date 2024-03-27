<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{

    public function index()
    {
        $kontak = Kontak::all();
        $setting = Setting::first();
        $user = User::all();
        $data = Post::all();
        return view("admin.content.kontak", compact("kontak","setting","user","data"));
    }
    
    
    
    public function create()
    {
        $kontak = Kontak::all();
        $setting = Setting::first();
        $user = User::all();
        $data = Post::all();

        // dd($kontak);
        return view("website.section.kontak", compact("kontak","setting","user","data"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   =>  'required|min:5',
            'tlpn'   =>  'required|min:12',
            'alamat'   =>  'required|min:10',
            'email' =>  'required|min:10',
            'message' =>  'required|min:10',
        ]);

        Kontak::create([
            'name'  => $request->name,
            'tlpn'  => $request->tlpn,
            'alamat'  => $request->alamat,
            'email'=> $request->email,
            'message'=> $request->message
        ]);

        return redirect('kontak_web')->with(['success' => 'Data Berhasil Di Update']);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        {
            $kontak->delete();
            return redirect()->route('kontak.index')->with(['success'=> 'Data berhasil di hapus']);
        }
    }
}
