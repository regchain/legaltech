<?php

namespace App\Http\Controllers\Pembinaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('bin.apps1.dashboard.home');
    }
}
