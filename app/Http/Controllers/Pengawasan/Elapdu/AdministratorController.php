<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
        {
            return view('administrator.home');
        }
    public function jabatan()
        {
            return view('administrator.jabatan_list');
        }
    public function jabatan_create()
        {
            return view('administrator.jabatan_create');
        }
    public function pangkat()
        {
            return view('administrator.pangkat_list');
        }
    public function pangkat_create()
        {
            return view('administrator.pangkat_create');
        }
    public function pegawai()
        {
            return view('administrator.pegawai_list');
        }
    public function pegawai_create()
        {
            return view('administrator.pegawai_create');
        }
    public function wilayah()
        {
            return view('administrator.wilayah_list');
        }
    public function wilayah_create()
        {
            return view('administrator.wilayah_create');
        }

    public function hakakses_list()
        {
            return view('administrator.hakakses_list');
        }

    public function hakakses_create()
        {
            return view('administrator.hakakses_create');
        }
    public function group()
        {
            return view('administrator.group');
        }

    public function peraturan()
        {
            return view('administrator.code');
        }

    public function pasal_create()
        {
            return view('administrator.code_article_create');
        }
    
    public function peraturan_create()
        {
            return view('administrator.code_create');
        }
    

}
