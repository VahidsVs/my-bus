<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function close()
    {
        return view('close');
    }

    public function pilgrimage()
    {
        return view('pilgrimage');
    }
    public function companies()
    {
        return view('companies');
    }
}
