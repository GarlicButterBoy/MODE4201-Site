<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function showClassworks()
    {
        return view ('content.classworks');
    }
    
    public function showLab2()
    {
        return view ('content.lab2');
    }

    public function showLab2()
    {
        return view ('content.lab2');
    }
}