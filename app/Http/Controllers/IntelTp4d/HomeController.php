<?php

namespace App\Http\Controllers\IntelTp4d;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('intel.tp4d.home');
    }
    public function ebudgeting()
    {
        return view('intel.tp4d.ebudgeting');
    }
    public function erup()
    {
        return view('intel.tp4d.erup');
    }
    public function eproject()
    {
        return view('intel.tp4d.eproject');
    }
    public function eulp()
    {
        return view('intel.tp4d.eulp');
    }
    public function eproc()
    {
        return view('intel.tp4d.eproc');
    }
    public function swakelola()
    {
        return view('intel.tp4d.swakelola');
    }
    public function ekontrak()
    {
        return view('intel.tp4d.ekontrak');
    }
    public function eprogress()
    {
        return view('intel.tp4d.eprogress');
    }
    public function eperformance()
    {
        return view('intel.tp4d.eperformance');
    }
    public function easset()
    {
        return view('intel.tp4d.easset');
    }
    

}
