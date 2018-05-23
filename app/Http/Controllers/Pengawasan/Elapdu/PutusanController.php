<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PutusanController extends Controller
{
    public function putusan()
    {
        return view('elapdu.putusan.list');
    }
}
