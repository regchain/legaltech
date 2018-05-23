<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('administrator.pengguna');
    }

    public function trial()
    {
        return view('elapdu.trial');
    }

    public function blank()
    {
        return view('elapdu.blank');
    }
}
