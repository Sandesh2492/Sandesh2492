<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControll extends Controller
{
    function index()
    {
        return view('login'); 
    }

}
