<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyFirstController extends Controller
{
    public function show($id = 0)
    {
        $users = DB::table('users')->where('age', 0)->pluck('salary');
        dump($users);
        // 
        // foreach ($posts as $post) 
        // {
        //     dump(gettype($post->title));
        // }
			
        // return view('first.show', ['posts' => $posts]);
    }
}
