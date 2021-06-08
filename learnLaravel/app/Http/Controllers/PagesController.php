<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        $names = ['John', 'Udin', 'Andi', 'Bambang'];
        return view('about')->with('name', $names);
    }
}
