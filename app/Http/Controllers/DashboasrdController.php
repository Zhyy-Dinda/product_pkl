<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use App\Models\profile;
use App\Models\Artikel;
use App\Models\rfc;
use App\Models\Panduan;
use App\Models\Layanan;
use App\Models\Kontak;
use App\Models\Header;
use Illuminate\Http\Request;

class DashboasrdController extends Controller
{
  
    public function index()
    {
        $setting = Setting::first();
        $data = Post::all();
        $posts = Post::all();
        $user = User::all();
        $profile = profile::all();
        $rfc = rfc::all();
        $artikel = Artikel::all();
        $panduan = Panduan::all();
        $layanan = Layanan::all();
        $contact = Kontak::all();
        $header = Header::latest();
        return view('admin.content.dashboard.index', compact([
            'setting',
            'data' ,
            'posts' ,
            'user',
            'profile',
            'rfc',
            'artikel',
            'panduan',
            'layanan',
            'contact',
            'header'
            ]));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
