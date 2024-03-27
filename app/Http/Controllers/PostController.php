<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index(Request $request)
    {
        

        $posts = Post::orderBy("created_at","desc")->paginate(5);
        $setting = Setting::first();
        $data = Post::all();
        $post = Post::first();
        $user = User::first();
        return view('admin.content.posts.index', compact('request','posts','setting','post','data','user'));
    }

// ======= create ======================

    public function create()
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.content.posts.create', compact('setting','data','user'));
    }

// ======= simpan ======================
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'   =>  'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'title'   =>  'required|min:5',
            'content' =>  'required|min:10',
        ]);

        $image = $request->file('image');
        $filename =uniqid().$image->getClientOriginalName();
        $image->storeAs('public/posts', $filename);

        Post::create([
            'image'  => $filename,
            'title'  => $request->title,
            'content'=> $request->content
        ]);

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    
// ======= show ======================
    
    public function show(Post $post)
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();

        return view('admin.content.posts.show', compact('post','setting','data','user'));
    }

// ======= edit ======================
    public function edit(Post $post)
    {
        $setting = Setting::first();
        $data = Post::all();
        $user = User::all();
        return view('admin.content.posts.edit', compact('post','setting','data','user'));
    }

// ======= update ======================
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'     => 'required|min:10',
        ]);

        if($request->hasFile('image')){


            $image = $request->file('image');
            $image->storeAs('public/posts/',$image->hashName());

            Storage::delete('public/posts/'.$post->image);

            $post->update([
                'image'     =>  $image->hashName(),
                'title'     =>  $request->title,
                'content'   =>  $request->content,
            ]);
        }else{
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        }
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    public function destroy(Post $post)
    {
        Storage::delete('public/posts'.$post->image);
        $post->delete();
        return redirect()->route('post.index')->with(['success'=> 'Data berhasil di hapus']);
    }
}
