<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class PutusanController extends Controller
{
    public function putusan()
    {
        return view('was.elapdu.process.putusan.list');
    }
}
