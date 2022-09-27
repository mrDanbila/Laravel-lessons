<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function show($id = 0){
        return view('first.show', ['var1' => $id, 'var2' => '2']);
    }
}
