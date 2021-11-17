<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='zero'){
        //hello.blade.php
        $data = [
            'id' => $id
        ];
        return view('hello', $data);
    }
}
