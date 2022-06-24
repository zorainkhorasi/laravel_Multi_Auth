<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); // jab bhi obj banay contructor apney ap call hojaye 
    }

    public function index()
    {

        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }
}
