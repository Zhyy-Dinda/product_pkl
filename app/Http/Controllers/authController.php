<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        $setting = Setting::first();
        $user = User::all();


        if ($users = Auth::user()) {
            if ($users->role == 'admin') {
                return view('admin.content.dashboard.index');
            } elseif ($users->role == 'pengguna') {
                return view('pengguna.content.dashboard.index');
            }
        } 
        
        // Penanganan untuk kasus ketika $user tidak ditemukan atau rolenya bukan admin atau pengguna
        return view("auth.login", compact("setting","user"));
    }
    public function prosesLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $kredential = $request->only('email','password');
        if(Auth::attempt($kredential)){
            $request->session()->regenerate();
            $users = Auth::user();
            if($users->role == 'admin'){
                return redirect()->intended('')->with(['message' => 'berhasil login', 'type' => 'success']);
            } elseif ($users->role == 'a'){
                return redirect()->intended('')->with(['message' => 'berhasil login', 'type' => 'success']);
            }
        }else{
            return redirect()->back()->with(['message' => 'username password salah', 'type' => 'success']);
    }
}

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }

    

    public function store(Request $request){
        
    }


    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $kredential = $request->only('email','password');
        if(Auth::attempt($kredential)){
            $request->session()->regenerate();
            $user = Auth::user();
            
            if($user->role == 'admin'){
                return redirect()->intended('dashboard')->with(['message' => 'berhasil login', 'type' => 'success']);
            } elseif ($user->role == 'pengguna'){
                return redirect()->intended('users/dashboard')->with(['message' => 'berhasil login', 'type' => 'success']);
            }
        }else{
            return redirect()->back()->with(['message' => 'email password salah', 'type' => 'success']);
        }
    }
}
