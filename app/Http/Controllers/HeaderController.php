<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Beranda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::all();
        $beranda = Beranda::all();
        $header = Header::all();
        $setting = Setting::first();
        $data = Post::first();
        $user = User::first();
        return view("admin.content.header.index", compact("setting","data","beranda","header","user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.content.header.create', compact('setting','data','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'     =>  'required|image|mimes:png,jpg,jpeg',
            'title'     =>  'required|min:5',
            'content'     =>  'required|min:5',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/header', $image->hashName());

        Header::create([
            'image'    => $image->hashName(),
            'title'    => $request->title,
            'content'  => $request->content,
        ]);

        return redirect()->route('header.index')->with(['success', 'Data berhasil di inpu']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.content.header.edit', compact('header','setting','data','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'     => 'required|min:10',
        ]);

        if($request->hasFile('image')){


            $image = $request->file('image');
            $image->storeAs('public/header/',$image->hashName());

            Storage::delete('public/header/'.$header->image);

            $header->update([
                'image'     =>  $image->hashName(),
                'title'     =>  $request->title,
                'content'   =>  $request->content,
            ]);
        }else{
            $header->update([
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        }
        return redirect()->route('header.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     */public function destroy(Header $header)
    {
        Storage::delete('public/header'.$header->image);
        $header->delete();
        return redirect()->route('header.index')->with(['success'=> 'Data berhasil di hapus']);
    }
}
