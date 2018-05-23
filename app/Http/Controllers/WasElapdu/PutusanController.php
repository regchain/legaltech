<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class PutusanController extends Controller
{
    public function putusan()
    {
        return view('elapdu.putusan.list');
    }
}
