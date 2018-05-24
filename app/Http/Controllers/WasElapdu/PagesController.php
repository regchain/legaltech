<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;
use App\Pidsus\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('was.elapdu.dashboard.home');
    }

    public function pelapor()
    {
        return view('was.elapdu.dashboard.pelapor');
    }
}
