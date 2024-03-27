<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.setting.index', compact('setting','user','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.setting.create', compact('setting','data','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_web' => 'required|min:5',
            'icon'      => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'logo'      => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'heading'   => 'required|min:5',
            'maps'      => 'required',
        ]);

        $icon = $request->file('icon');
        $logo = $request->file('logo');
        $icon->storeAs('public/icon/', $icon->hashName());
        $logo->storeAs('public/logo/', $logo->hashName());


        Setting::create([
            'title_web'     => $request->title_web,
            'icon'      => $icon->hashName(),
            'logo'      => $logo->hashName(),
            'heading'   => $request->heading,
            'maps'      => $request->maps,
        ]);

        return redirect()->route('setting.index')->with('success', 'Data berhasi tersimpan');
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
    public function edit(Setting $setting)
    {
        $data = Post::all();
        $user = User::all();
        return view('admin.setting.edit', compact('setting','user', 'data'));
    }
    
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'title_web' => 'required|min:5',
            'icon'      => 'image|mimes:png,jpg,gif,jpeg,svg|max:2048',
            'logo'      => 'image|mimes:png,jpg,jpeg,svg|max:2048',
            'heading'   => 'required|min:5',
            'maps'      => 'required',
        ]);
    
        // Icon
        if ($request->hasFile('icon')) {
            $this->updateImage($request, 'icon', 'public/icon/', $setting);
        }
    
        // Logo
        if ($request->hasFile('logo')) {
            $this->updateImage($request, 'logo', 'public/logo/', $setting);
        }
    
        // Update common fields
        $setting->update([
            'title_web' => $request->title_web,
            'heading'   => $request->heading,
            'maps'      => $request->maps,
        ]);
    
        return redirect()->route('setting.index')->with('success', 'Data berhasil diupdate');
    }
    
    private function updateImage(Request $request, $fieldName, $storagePath, Setting $setting)
    {
        $image = $request->file($fieldName);
        $image->storeAs($storagePath, $image->hashName());
        Storage::delete($storagePath . $setting->{$fieldName});
    
        $setting->update([
            $fieldName => $image->hashName(),
        ]);
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        Storage::delete('public/icon/' . $setting->icon);
        Storage::delete('public/logo/' . $setting->logo);
        $setting->delete();
        return redirect()->route('setting.index')->with('success', 'Data berhasi di hapus');
    }
}
