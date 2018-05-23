<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
        {
            return view('was.elapdu.admin.home');
        }
    public function jabatan()
        {
            return view('was.elapdu.admin.jabatan_list');
        }
    public function jabatan_create()
        {
            return view('was.elapdu.admin.jabatan_create');
        }
    public function pangkat()
        {
            return view('was.elapdu.admin.pangkat_list');
        }
    public function pangkat_create()
        {
            return view('was.elapdu.admin.pangkat_create');
        }
    public function pegawai()
        {
            return view('was.elapdu.admin.pegawai_list');
        }
    public function pegawai_create()
        {
            return view('was.elapdu.admin.pegawai_create');
        }
    public function wilayah()
        {
            return view('was.elapdu.admin.wilayah_list');
        }
    public function wilayah_create()
        {
            return view('was.elapdu.admin.wilayah_create');
        }

    public function hakakses_list()
        {
            return view('was.elapdu.admin.hakakses_list');
        }

    public function hakakses_create()
        {
            return view('was.elapdu.admin.hakakses_create');
        }
    public function group()
        {
            return view('was.elapdu.admin.group');
        }

    public function peraturan()
        {
            return view('was.elapdu.admin.code');
        }

    public function pasal_create()
        {
            return view('was.elapdu.admin.code_article_create');
        }
    
    public function peraturan_create()
        {
            return view('was.elapdu.admin.code_create');
        }
    

}
