<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DataTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clientSide(Request $request)
    {

        // $users = User::orderBy("created_at","desc")->paginate(5);
        $users = new User;
        if($request->get('search')){
            $users = $users->where('name','LIKE','%'.$request->get('search').'%')->orWhere('email','LIKE','%'.$request->get('search').'%');
        }
        $users = $users->get();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.dataTable.clienSide', compact('users','setting', 'data','request'));
    }


    public function ServerSide(Request $request)
    {

        // $userss = User::orderBy("created_at","desc")->paginate(5);
        $users = new User;
        if($request->get('search')){
            $users = $users->where('name','LIKE','%'.$request->get('search').'%')->orWhere('email','LIKE','%'.$request->get('search').'%');
        }
        $users = $users->get();
        $setting = Setting::first();
        $data = Post::all();
        return view('admin.dataTable.serverSide', compact('users','setting', 'data','request'));
    }

 
}
