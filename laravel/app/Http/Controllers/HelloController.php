<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id){
        $data = [
            'id' => $id
        ];
        return view('hello', $data);
    }
}
