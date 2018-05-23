<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class KlarifikasiController extends Controller
{
    public function klarifikasi()
    {
        return view('elapdu.klarifikasi.list');
    }

    public function klarifikasi_create()
    {
        return view('elapdu.klarifikasi.create');
    }

    public function klarifikasi_view()
    {
        return view('elapdu.klarifikasi.view');
    }

    public function klarifikasi_edit()
    {
        return view('elapdu.klarifikasi.edit');
    }

    public function klarifikasi_proses()
    {
        return view('elapdu.klarifikasi.proses');
    }

    public function ba_was2_create()
    {
        return view('elapdu.surat.ba_was2_create');
    }

    public function ba_was2_qna()
    {
        return view('elapdu.surat.ba_was2_qna');
    }

    public function ba_was2_view()
    {
        return view('elapdu.surat.ba_was2_view');
    }

    public function ba_was2_edit()
    {
        return view('elapdu.surat.ba_was2_edit');
    }

    public function was5b()
    {
        return view('elapdu.surat.was5b');
    }

    public function was4_create()
    {
        return view('elapdu.surat.was4_create');
    }

     public function was4_edit()
    {
        return view('elapdu.surat.was4_edit');
    }

     public function was5a_create()
    {
        return view('elapdu.surat.was5a_create');
    }

    public function l_was1_create()
    {
        return view('elapdu.surat.l_was1_create');
    }

    public function sp_was2_create()
    {
        return view('elapdu.surat.sp_was2_create');
    }

}
