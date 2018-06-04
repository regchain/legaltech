<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class LapduController extends Controller
{
    public function laporan()
    {
        return view('was.elapdu.process.lapdu.list');
    }
	
	public function laporan_create()
    {
        return view('was.elapdu.process.lapdu.create');
    }

    public function laporan_view()
    {
        return view('was.elapdu.process.lapdu.view');
    }

    public function laporan_edit()
    {
        return view('was.elapdu.process.lapdu.edit');
    }

    public function laporan_disposisi()
    {
        return view('was.elapdu.process.lapdu.disposisi');
    }
    public function was1()
    {
        return view('was.elapdu.documents.was1');
    }

    public function was1_create()
    {
        return view('was.elapdu.documents.was1_create');
    }

    public function was1_edit()
    {
        return view('was.elapdu.documents.was1_edit');
    }

    public function was2()
    {
        return view('was.elapdu.documents.was2');
    }

    public function was2_edit()
    {
        return view('was.elapdu.documents.was2_edit');
    }

    public function was3_create()
    {
        return view('was.elapdu.documents.was3_create');
    }

    public function was3_edit()
    {
        return view('was.elapdu.documents.was3_edit');
    }

    public function sp_was1_create()
    {
        return view('was.elapdu.documents.sp_was1_create');
    }

}
