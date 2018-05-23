<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index()
    {
        return view('forms.form');
    }

    public function editor()
    {
        return view('forms.editor');
    }

    public function select2()
    {
        return view('forms.select2');
    }

    public function daterange()
    {
        return view('forms.daterange');
    }

    public function timepicker()
    {
        return view('forms.timepicker');
    }

    public function icheck()
    {
        return view('forms.icheck');
    }

    public function inputmask()
    {
        return view('forms.inputmask');
    }

    public function inputaddon()
    {
        return view('forms.inputaddon');
    }

    public function uigeneral()
    {
        return view('forms.uigeneral');
    }

    public function document()
    {
        return view('forms.document');
    }

    public function documentprint()
    {
        return view('forms.documentprint');
    }

    public function button()
    {
        return view('forms.button');
    }

    public function progress()
    {
        return view('forms.progress');
    }

    public function table()
    {
        return view('forms.table');
    }    
}

