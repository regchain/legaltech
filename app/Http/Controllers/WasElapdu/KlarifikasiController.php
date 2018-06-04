<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class KlarifikasiController extends Controller
{
    public function klarifikasi()
    {
        return view('was.elapdu.process.klarifikasi.list');
    }

    public function klarifikasi_create()
    {
        return view('was.elapdu.process.klarifikasi.create');
    }

    public function klarifikasi_view()
    {
        return view('was.elapdu.process.klarifikasi.view');
    }

    public function klarifikasi_edit()
    {
        return view('was.elapdu.process.klarifikasi.edit');
    }

    public function klarifikasi_proses()
    {
        return view('was.elapdu.process.klarifikasi.proses');
    }

    public function ba_was2_create()
    {
        return view('was.elapdu.documents.ba_was2_create');
    }

    public function ba_was2_qna()
    {
        return view('was.elapdu.documents.ba_was2_qna');
    }

    public function ba_was2_view()
    {
        return view('was.elapdu.documents.ba_was2_view');
    }

    public function ba_was2_edit()
    {
        return view('was.elapdu.documents.ba_was2_edit');
    }

    public function was5b()
    {
        return view('was.elapdu.documents.was5b');
    }

    public function was4_create()
    {
        return view('was.elapdu.documents.was4_create');
    }

     public function was4_edit()
    {
        return view('was.elapdu.documents.was4_edit');
    }

     public function was5a_create()
    {
        return view('was.elapdu.documents.was5a_create');
    }

    public function l_was1_create()
    {
        return view('was.elapdu.documents.l_was1_create');
    }

    public function sp_was2_create()
    {
        return view('was.elapdu.documents.sp_was2_create');
    }

}
