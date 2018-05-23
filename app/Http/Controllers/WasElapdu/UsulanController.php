<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class UsulanController extends Controller
{
    public function usulan()
    {
        return view('elapdu.usulan.list');
    }

    public function usulan_disposisi()
    {
        return view('elapdu.usulan.disposisi');
    }

    public function ba_was6_create()
    {
        return view('elapdu.surat.ba_was6_create');
    }

    public function ba_was7_create()
    {
        return view('elapdu.surat.ba_was7_create');
    }

    public function ba_was8_create()
    {
        return view('elapdu.surat.ba_was8_create');
    }

    public function ba_was9()
    {
        return view('elapdu.surat.ba_was9');
    }

    public function was16a_create()
    {
        return view('elapdu.surat.was16a_create');
    }

    public function was17_create()
    {
        return view('elapdu.surat.was17_create');
    }

    public function was18_create()
    {
        return view('elapdu.surat.was18_create');
    }

    public function usulan_view()
    {
        return view('elapdu.usulan.view');
    }

    public function sk_was1_create()
    {
        return view('elapdu.surat.sk_was1_create');
    }

    
    
}
