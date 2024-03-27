<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Post;
use App\Models\profile;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    protected $setting;
    public function __construct(Setting $setting){
        $this->setting = $setting;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Beranda::latest()->get();
        $profile = profile::orderBy("created_at","desc")->paginate(5);
        $posts = Post::orderBy("created_at","desc")->paginate(5);
        $setting = Setting::first();
        return view("admin.content.home.index", compact("data", "profile","posts", "setting"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
