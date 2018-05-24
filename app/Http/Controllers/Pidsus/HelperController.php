<?php

namespace App\Http\Controllers\Pidsus;

use Illuminate\Http\Request;
use App\Pidsus\Kasus;
use App\Pidsus\Subyek;
use App\Pidsus\KategoriSubyek;
use App\Pidsus\Jaksa;

class HelperController extends Controller
{
    public function getKasus($status_param, $status_value)
    {
        $cases = Kasus::select(['kasus.*','nama_terlapor','lembaga','obyek_pidana'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where($status_param, $status_value)
            ->orderBy($status_param)
            ->get();
        
        return $cases;
    }

    public function getKasusByID($kasus_id)
    {
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.id as obyek_id','obyek.obyek_pidana'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id', $kasus_id)
            ->first();

        return $case;
    }

    public function getJaksaAll()
    {
        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        return $jaksas;
    }
}