<?php

namespace App\Http\Controllers\Pidsus;

use App\Pidsus\Pidsus\Jabatan;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penyidikan()
    {
        return view('layouts.penyidikan');
    }

}
