<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
    public function index() {

        $name = '侍太郎';
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
       
        return view('index', compact('name', 'languages'));
    }
}

