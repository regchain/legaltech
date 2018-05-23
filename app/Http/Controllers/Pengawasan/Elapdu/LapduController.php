<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapduController extends Controller
{
    public function laporan()
    {
        return view('elapdu.lapdu.list');
    }
	
	public function laporan_create()
    {
        return view('elapdu.lapdu.create');
    }

    public function laporan_view()
    {
        return view('elapdu.lapdu.view');
    }

    public function laporan_edit()
    {
        return view('elapdu.lapdu.edit');
    }

    public function laporan_disposisi()
    {
        return view('elapdu.lapdu.disposisi');
    }
    public function was1()
    {
        return view('elapdu.surat.was1');
    }

    public function was1_create()
    {
        return view('elapdu.surat.was1_create');
    }

    public function was1_edit()
    {
        return view('elapdu.surat.was1_edit');
    }

    public function was2()
    {
        return view('elapdu.surat.was2');
    }

    public function was2_edit()
    {
        return view('elapdu.surat.was2_edit');
    }

    public function was3_create()
    {
        return view('elapdu.surat.was3_create');
    }

    public function was3_edit()
    {
        return view('elapdu.surat.was3_edit');
    }

    public function sp_was1_create()
    {
        return view('elapdu.surat.sp_was1_create');
    }

}
