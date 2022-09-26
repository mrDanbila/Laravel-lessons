<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function view($id = 0){
        return "smtNew and ".$id;
    }
}
