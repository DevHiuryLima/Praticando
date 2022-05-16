<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function problemaUm(Request $request)
    {
        return view('layouts.problema-um');
    }

    public function problemaDois(Request $request)
    {
        return view('layouts.problema-dois');
    }

    public function problemaTres(Request $request)
    {
        return view('layouts.problema-tres');
    }

    public function problemaQuatro(Request $request)
    {
        return view('layouts.problema-quatro');
    }
}
