<?php

namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;
use App\Pidsus\Models\Punishment;

class SubyekController extends Controller
{
    public function subyek_terlapor()
    {
        return view('was.elapdu.process.subyek.terlapor');
    }
    public function subyek_klarifikasi()
    {
        return view('was.elapdu.process.subyek.klarifikasi');
    }
    public function subyek_inspeksi()
    {
        return view('was.elapdu.process.subyek.inspeksi');
    }
    public function subyek_usulan()
    {
        return view('was.elapdu.process.subyek.usulan');
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

        return view('was.elapdu.process.subyek.putusan', compact('result'));
    }

    public function subyek_putusanprint()
    {
        return view('was.elapdu.process.subyek.putusanprint');
    }

    public function subyek_putusandetail()
    {
        return view('was.elapdu.process.subyek.putusandetail');
    }
}

