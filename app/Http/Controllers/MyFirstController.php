<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class MyFirstController extends Controller
{
    public function show()
    {
        echo "smt";
        // $posts = Posts::find(2);

        // foreach($posts->thumbnails as $thumbnail)
        // {
        //     dump($thumbnail->path);
        // }
    }


    public function form(Request $request)
    {
        if ($request->has('title') and $request->has('slug')) {
            $title = $request->input('title');
            $slug  = $request->input('slug');
            return view('post.form', ['title' => $title, 'slug' => $slug,]);
        }
        
        else return view('post.form');
    } 
}

