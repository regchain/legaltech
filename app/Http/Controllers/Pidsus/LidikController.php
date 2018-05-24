<?php

namespace App\Http\Controllers\Pidsus;

use Illuminate\Http\Request;
use App\Pidsus\Kasus;
use App\Pidsus\Obyek;
use App\Pidsus\Subyek;
use App\Pidsus\Jaksa;
use App\Pidsus\Surat;
use App\Pidsus\KasusSubyek;

class LidikController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = new HelperController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.nilai_kontrak','obyek.id as obyek_id','obyek.obyek_pidana'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id',$id)
            ->first();

        $jaksas = $this->service->getJaksaAll();

        if ($case && !empty($case)) {
            return view('decay-case.rp1.rp1_lidik', ['case' => $case, 'jaksas' => $jaksas]);
        } else {
            return redirect()->route('rp1.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_kasus'           => 'required',
            'kasus_posisi'          => 'required',
            'lembaga'               => 'required',
            'obyek_pidana'          => 'required',
            'no_surat_perkara'      => 'required',
            'tanggal_surat_perkara' => 'required'
        ]);

        $status_rp1 = $request->status_rp1;
        if ($status_rp1 == Kasus::STATUS_DIALIHKAN OR $status_rp1 == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $case = Kasus::find($id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp1'));
            }

            $kasus_subyek = KasusSubyek::where('kasus_id',$id)->get();
            foreach ($kasus_subyek as $subyek) {
                $findSubyek = Subyek::find($subyek->subyek_id);
                if ($findSubyek) {
                    $findSubyek->update(['status' => 0]); 
                }
            }
        } else {
            $case = Kasus::find($id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp1') + ['status_rp2' => Kasus::STATUS_BARU]);

                $cekSurat = Surat::where('kasus_id', $case->id)
                    ->where('tipe_surat', 'RP2')
                    ->first();
                
                if ($cekSurat) {
                    $surat = Surat::find($cekSurat->id);
                } else {
                    $surat = Surat::create($request->only('no_surat_perkara','tanggal_surat_perkara') + ['kasus_id' => $case->id, 'tipe_surat' => 'RP2']);

                    $jaksas = $request->jaksa_id;
                    if ($jaksas && !empty($jaksas)) {
                        foreach ($jaksas as $jaksa) {
                            $jaksa_id = intval($jaksa);
                            $findJaksa = Jaksa::find($jaksa_id);
                            $surat->jaksas()->attach($findJaksa);
                        }
                    }
                }
            }
        }

        // Update subyek
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga'));
        }

        // Update obyek
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak'));
        }

        return redirect()->route('rp2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
