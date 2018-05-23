<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function userblank()
        {
            return view('elapdu.pelapor.blank');
        }
}
