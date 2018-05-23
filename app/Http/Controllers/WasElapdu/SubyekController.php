<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Punishment;

class SubyekController extends Controller
{
    public function subyek_terlapor()
    {
        return view('elapdu.subyek.terlapor');
    }
    public function subyek_klarifikasi()
    {
        return view('elapdu.subyek.klarifikasi');
    }
    public function subyek_inspeksi()
    {
        return view('elapdu.subyek.inspeksi');
    }
    public function subyek_usulan()
    {
        return view('elapdu.subyek.usulan');
    }
    public function subyek_putusan(Request $request)
    {
        $result = Punishment::whereNull('deleted_at');

        if ($request->get('status')) {
            $status = '';

            switch ($request->get('status')) {
                case 'ringan':
                    $status = 'RINGAN';
                break;
                case 'sedang':
                    $status = 'SEDANG';
                break;
                case 'berat':
                    $status = 'BERAT';
                break;
                case 'berhenti':
                    $status = 'BERHENTI SEMENTARA';
                break;
                default:
                break;
            }
            $result = $result->where('keterangan', $status);
        }

        $result = $result->get();

        return view('elapdu.subyek.putusan', compact('result'));
    }

    public function subyek_putusanprint()
    {
        return view('elapdu.subyek.putusanprint');
    }

    public function subyek_putusandetail()
    {
        return view('elapdu.subyek.putusandetail');
    }
}

