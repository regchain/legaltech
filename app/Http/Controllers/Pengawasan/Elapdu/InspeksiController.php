<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspeksiController extends Controller
{
    public function inspeksi()
    {
        return view('elapdu.inspeksi.list');
    }

    public function inspeksi_create()
    {
        return view('elapdu.inspeksi.create');
    }
    
    Public function inspeksi_disposisi()
    {
        return view('elapdu.inspeksi.disposisi');
    }
    
    Public function l_was2_create()
    {
        return view('elapdu.surat.l_was2_create');
    }
    
    Public function inspeksi_view()
    {
        return view('elapdu.inspeksi.view');
    }
    
    public function sp_was2_create()
    {
        return view('elapdu.surat.sp_was2_create');
    }

    public function ba_was3_qna()
    {
        return view('elapdu.surat.ba_was3_qna');
    }

    public function ba_was3_create()
    {
        return view('elapdu.surat.ba_was3_create');
    }

    public function ba_was3_edit()
    {
        return view('elapdu.surat.ba_was3_edit');
    }

    public function ba_was3_view()
    {
        return view('elapdu.surat.ba_was3_view');
    }

    public function sp_was3_create()
    {
        return view('elapdu.surat.sp_was3_create');
    }

    public function was15_create()
    {
        return view('elapdu.surat.was15_create');
    }

}
