<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function index()
    {
        return view('elapdu.guest.pages.pengaduan');
    }

    public function pengaduan2()
    {
        return view('elapdu.guest.pages.pengaduan2');
    }

    public function question1()
    {
        return view('elapdu.guest.pages.question1');
    }

    public function question2()
    {
        return view('elapdu.guest.pages.question2');
    }

    public function question3()
    {
        return view('elapdu.guest.pages.question3');
    }

    public function question4()
    {
        return view('elapdu.guest.pages.question4');
    }

    public function cara_lapdu()
    {
        return view('elapdu.guest.pages.cara_lapdu');
    }

    public function cara_whistle()
    {
        return view('elapdu.guest.pages.cara_whistle');
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
