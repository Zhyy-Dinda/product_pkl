<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $users = User::orderBy("created_at","desc")->paginate(5);
        // $user = new User;
        // if($request->get('search')){
        //     $user = $user->where('name','LIKE','%'.$request->get('search').'%')->orWhere('email','LIKE','%'.$request->get('search').'%');
        // }
        // 
        // 
        // $user = $user->get();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.users.index', compact('users','setting', 'data','request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.users.create', compact('user','setting','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'image'  => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'name'   => 'required|min:5',
                'email'  => 'required|min:5',
                'password'  => 'required|min:3',
            ]);

            $image = $request->file('image');
            $image->storeAs('public/user',$image->hashName());

            User::create([
                'image'   => $image->hashName(),
                'name'  => $request->name,
                'email'  => $request->email,
                'password'  => Hash::make($request->password),
            ]);

            return redirect()->route('user.index')->with(['success', 'Data Berhasil Di Simpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // edit
    public function edit(User $user)
    {
        $users = User::all();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.users.edit', compact('user','users','setting', 'data',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'image'      => 'image|image|mimes:png,jpg,jpeg|max:2048',
            'name'      =>  'required|min:3',
            'email'      =>  'required|min:5',
            'password'      =>  'required|min:3',
        ]);

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->storeAs('public/user/',$image->hashName());

            // hapus foto yang di ganti, dari storage
            Storage::delete('public/user/'. $user->image);

            $user->update([
                'image'     => $image->hashName(),
                'name'      => $request->name,
                'email'      => $request->email,
                'password'      => Hash::make($request->password),
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('user.index')->with(['success', 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Storage::delete('public/user/'.$user->image);
        $user->delete();
        return redirect()->route('user.index')->with(['success', 'Data berhasil Di Haspus']);
    }
}
