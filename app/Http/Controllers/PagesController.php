<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getLogin()
    {
        return view('layouts.app');
    }
}
