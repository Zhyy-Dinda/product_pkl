<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        $user = User::all();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.users.profile', compact('user','setting', 'data'));
    }
}
