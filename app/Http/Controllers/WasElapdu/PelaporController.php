<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function userblank()
        {
            return view('was.elapdu.process.pelapor.blank');
        }
}
