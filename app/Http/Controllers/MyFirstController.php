<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;


class MyFirstController extends Controller
{
    public function show($id = 0)
    {
        $posts = Posts::all();
        
        foreach ($posts as $post) {
            dump($post->thumbnail['path']);
        }
    }
}

// class MyFirstController extends Controller
// {
// 		public function show($id = 0)
// 		{
// 			$post = Posts::find(1)->thumbnails;
// 			dump($post); // объект с миниатюрой
// 		}
//         // $users = DB::table('users')->where('age', 0)->pluck('salary');
//         // dump($users);
//         // 
//         // foreach ($posts as $post) 
//         // {
//         //     dump(gettype($post->title));
//         // }
			
//         // return view('first.show', ['posts' => $posts]);
    
// }
