<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $user = User::all();
        $data = Post::all();
        return view('pengguna.content.dashboard.index', compact('setting','user','data'));
    }

    public function profile(){
        $setting = Setting::first();
        $user = User::first();
        $data = Post::all();
        return view('pengguna.content.profile.index', compact('setting','user','data'));
    }

    public function edit(Request $request){
        $setting = Setting::first();
        $user = User::first();
        $data = Post::all();
        $profile = User::all();
        return view('pengguna.content.profile.edit', compact('setting','user','data','profile'));
    }
}
