<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Header;
use App\Models\Layanan;
use App\Models\Post;
use App\Models\profile;
use App\Models\Setting; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $data;
    protected $profile;
    protected $posts;
    protected $setting;
    protected $header;
    protected $data_post;
    public function __construct(){
        $this->data = Beranda::all();
        $this->data_post = Post::all();
        $this->profile = profile::first();
        $this->posts =  Post::latest()->paginate(6);
        $this->setting = Setting::first();
        $this->header = Header::all();
    }

    public function home(){
        return view("website.section.home",[
            "profile"=> $this->profile,
            "data"=> $this->data,
            "data_post"=> $this->data_post,
            "posts"=> $this->posts,
            "setting"=> $this->setting,
            "header"=> $this->header
        ]);
    }


    // public function app(){
    //     $data = Beranda::all();
    //     $profile = profile::latest()->paginate(1);
    //     $posts = Post::latest()->paginate(6);
    //     $setting = Setting::latest()->paginate(1);
    //     return view("website.content.dashboard" ,compact("data","profile","posts","setting"));
    // }


    public function profile(){
        return view("website.section.profile",[
            "profile" => $this->profile,
            "setting" => $this->setting
        ]);
    }

    public function artikel(){
        $posts = DB::table('posts')->paginate(7);
        $topPost = Post::orderBy("created_at","asc")->paginate(1);
        $oldPost = Post::orderBy("created_at","desc")->paginate(1);
        $post = Post::first();
        $setting = Setting::first();
        return view("website.section.artikel", compact("setting","posts","topPost","oldPost","post"));
    }
    public function artikel_show($id){
        $posts = Post::find($id);
        $data = Post::all();
        $setting = Setting::first();
        // dd($id);
        return view("website.section.artikel_show", compact("setting","posts","data"));
    }

    public function rfc(){
        $setting = Setting::first();
        return view("website.section.rfc", compact("setting"));
    }

    public function layanan(){
        $setting = Setting::first();
        $layanan = Layanan::all();
        return view("website.section.layanan",compact("setting","layanan"));
    }

    public function panduan(){
        $setting = Setting::first();
        return view("website.section.panduan", compact("setting",));
    }
    
    public function kontak(){
        $setting = Setting::first();
        return view("website.section.kontak", compact("setting"));
    }

}
