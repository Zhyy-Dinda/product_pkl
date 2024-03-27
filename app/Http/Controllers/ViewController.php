<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Post;
use App\Models\profile;
use App\Models\Setting;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $data = Beranda::latest()->get();
        $profile = profile::orderBy("created_at","desc")->paginate(5);
        $posts = Post::orderBy("created_at","desc")->paginate(5);
        $setting = Setting::first();
        return view("admin.content.view.index", compact("data","posts","profile","setting"));
    }
}
