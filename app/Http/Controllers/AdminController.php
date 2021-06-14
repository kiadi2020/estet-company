<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function showadmin()
    {
        return view('admin');
    }

    public function admin()
    {
        return view('admin', [
           'posts' => Post::all(),
        ]);
    }

    public function post(Request $request) {
        Post::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->back();
    }
    public function delete($id) {
        Post::find($id)->delete();
        return redirect()->back();
    }

}
