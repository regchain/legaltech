<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class InspeksiController extends Controller
{
    public function inspeksi()
    {
        return view('was.elapdu.process.inspeksi.list');
    }

    public function inspeksi_create()
    {
        return view('was.elapdu.process.inspeksi.create');
    }
    
    Public function inspeksi_disposisi()
    {
        return view('was.elapdu.process.inspeksi.disposisi');
    }
    
    Public function l_was2_create()
    {
        return view('was.elapdu.documents.l_was2_create');
    }
    
    Public function inspeksi_view()
    {
        return view('was.elapdu.process.inspeksi.view');
    }
    
    public function sp_was2_create()
    {
        return view('was.elapdu.documents.sp_was2_create');
    }

    public function ba_was3_qna()
    {
        return view('was.elapdu.documents.ba_was3_qna');
    }

    public function ba_was3_create()
    {
        return view('was.elapdu.documents.ba_was3_create');
    }

    public function ba_was3_edit()
    {
        return view('was.elapdu.documents.ba_was3_edit');
    }

    public function ba_was3_view()
    {
        return view('was.elapdu.documents.ba_was3_view');
    }

    public function sp_was3_create()
    {
        return view('was.elapdu.documents.sp_was3_create');
    }

    public function was15_create()
    {
        return view('was.elapdu.documents.was15_create');
    }

}
