<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function index()
    {
        return view('was.elapdu.guest.pengaduan');
    }

    public function pengaduan2()
    {
        return view('was.elapdu.guest.pengaduan2');
    }

    public function question1()
    {
        return view('was.elapdu.guest.question1');
    }

    public function question2()
    {
        return view('was.elapdu.guest.question2');
    }

    public function question3()
    {
        return view('was.elapdu.guest.question3');
    }

    public function question4()
    {
        return view('was.elapdu.guest.question4');
    }

    public function cara_lapdu()
    {
        return view('was.elapdu.guest.cara_lapdu');
    }

    public function cara_whistle()
    {
        return view('was.elapdu.guest.cara_whistle');
    }

    public function test()
    {
        return view('templates.alpha.trial');
    }

    public function kawal()
    {
        return view('templates.alpha.kawal');
    }
}
