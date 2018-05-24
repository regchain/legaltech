<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationsController extends Controller
{
    public function index()
    {
        return view('core.documentation.form');
    }

    public function editor()
    {
        return view('core.documentation.editor');
    }

    public function select2()
    {
        return view('core.documentation.select2');
    }

    public function daterange()
    {
        return view('core.documentation.daterange');
    }

    public function timepicker()
    {
        return view('core.documentation.timepicker');
    }

    public function icheck()
    {
        return view('core.documentation.icheck');
    }

    public function inputmask()
    {
        return view('core.documentation.inputmask');
    }

    public function inputaddon()
    {
        return view('core.documentation.inputaddon');
    }

    public function uigeneral()
    {
        return view('core.documentation.uigeneral');
    }

    public function document()
    {
        return view('core.documentation.document');
    }

    public function documentprint()
    {
        return view('core.documentation.documentprint');
    }

    public function button()
    {
        return view('core.documentation.button');
    }

    public function progress()
    {
        return view('core.documentation.progress');
    }

    public function table()
    {
        return view('core.documentation.table');
    }    
}

