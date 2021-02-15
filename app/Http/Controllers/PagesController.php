<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view ('welcome');
    }
    
    public function home()

    {
        return view ('home');
    }
    
    public function about()
    {
        return view ('about', ['nama' => 'SMKN 1 SUBANG']);
    }
}
