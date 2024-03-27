<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Post;
use App\Models\profile;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
  
    public function index()
    {
        $beranda = Beranda::orderBy("created_at","desc")->paginate(5);
        $profile = profile::orderBy("created_at","desc")->paginate(5);
        $posts = Post::orderBy("created_at","desc")->paginate(5);
        $setting = Setting::first();
        return view("admin.content.beranda.index", compact("beranda","profile","posts","setting"));
        
    }

  
    public function create()
    {
        $setting = Setting::first();
        return view('admin.content.beranda.create', compact('setting'));
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'      => 'required|min:5',
            'sub_title'  => 'required|min:5',
            'heading'    => 'required|min:5',
            'content'    => 'required|min:10',
        ]);

        Beranda::create([
            'title'         => $request->title,
            'sub_title'     => $request->sub_title,
            'heading'       => $request->heading,
            'content'       => $request->content,
        ]);

        return redirect()->route('beranda.index')->with('success','Data Berhasil Di Simpan');
    }



      public function show(Beranda $beranda)
    {
        //
    }


    public function edit(Beranda $beranda)
    {
        $setting = Setting::first();
        return view('admin.content.beranda.edit', compact('beranda', 'setting'));
    }

    
    public function update(Request $request, Beranda $beranda)
    {
        // validasi form
        $this->validate($request,[
            'title'      => 'required|min:5',
            'sub_title'  => 'required|min:5',
            'heading'    => 'required|min:5',
            'content'    => 'required|min:10',
        ]);

        $beranda->update([
            'title'=> $request->title,
            'sub_title'=> $request->sub_title,
            'heading'=> $request->heading,
            'content'=> $request->content
        ]);

        return redirect()->route('beranda.index')->with(['success','Data Berhasil Di Update']);
    }

    
    public function destroy(Beranda $beranda)
    {
        Storage::delete('public/beranda'. $beranda->image);
        $beranda->delete();

        return redirect()->route('beranda.index')->with('success','Data berhasil di hapus');
    }
}
