<?php

namespace App\Http\Controllers\Pidsus;

use Illuminate\Http\Request;
use App\Pidsus\Kasus;
use App\Pidsus\Obyek;
use App\Pidsus\Subyek;
use App\Pidsus\Jaksa;
use App\Pidsus\KasusSubyek;
use App\Pidsus\KasusObyek;
use App\Pidsus\SuratJaksa;
use App\Pidsus\Surat;
use App\Pidsus\KategoriSubyek;

class Rp3MumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_subyek = array("1" => "TERLAPOR", "2" => "TERSANGKA", "3" => "TAHANAN");
        $cases = array();
        $kasus = Kasus::select(['kasus.*','no_surat_perkara','tanggal_surat_perkara'])
            ->join('surats','kasus.id','=','surats.kasus_id')
            ->where('status_rp2', Kasus::STATUS_DITERUSKAN)
            ->where('status_rp3mum_partial', 0)
            ->where('surats.tipe_surat', 'RP3MUM')
            ->where('status_surat', 1)
            ->orderBy('status_rp3mum')
            ->get();

        foreach ($kasus as $case) {
            $subyeks = array();
            $obyeks = array();
            $jaksas = array();
            $barang_sitaan = array();

            $kasus_id = $case["id"];
            $kasus_subyek = KasusSubyek::select(['subyek_id','subyek.*','kategori_subyeks.name as kategori_subyek'])
                ->join('subyek','subyek.id','=','kasus_subyek.subyek_id')
                ->join('kategori_subyeks','subyek.kategori_subyek_id','=','kategori_subyeks.id')
                ->where('kasus_id',$kasus_id)
                ->whereIn('subyek.status', array(1))
                ->get();
            foreach ($kasus_subyek as $subyek) {
                array_push($subyeks, $subyek);
            }
            
            $kasus_obyek = KasusObyek::select(['obyek_id','obyek.*'])
                ->join('obyek','obyek.id','=','kasus_obyek.obyek_id')
                ->where('kasus_obyek.kasus_id',$kasus_id)
                ->get();
            foreach ($kasus_obyek as $obyek) {
                array_push($obyeks, $obyek);
            }

            $kasus_jaksa = Surat::select(['nama_jaksa'])
                ->join('surat_jaksa','surats.id','=','surat_jaksa.surat_id')
                ->join('jaksas','surat_jaksa.jaksa_id','=','jaksas.id')
                ->where('surats.kasus_id',$kasus_id)
                ->where('tipe_surat','=','RP3MUM')
                ->where('status_surat', 1)
                ->orderBy('nama_jaksa')
                ->get();
            
            foreach ($kasus_jaksa as $jaksa) {
                array_push($jaksas, $jaksa);
            }

            $barang_bukti = Obyek::select(['barang_sitaan'])
                ->join('barang_bukti','obyek.id','=','barang_bukti.obyek_id')
                ->join('kasus_obyek','obyek.id','=','kasus_obyek.obyek_id')
                ->where('kasus_obyek.kasus_id',$kasus_id)
                ->orderBy('barang_bukti.id')
                ->get();
            
            foreach ($barang_bukti as $bukti) {
                array_push($barang_sitaan, $bukti);
            }

            $case["subyeks"] = $subyeks;
            $case["obyeks"] = $obyeks;
            $case["jaksas"] = $jaksas;
            $case["barang_sitaan"] = $barang_sitaan;
            $case["status_subyek"] = $status_subyek;
            array_push($cases, $case);
        }

        return view('decay-case.rp3mum.rp3mum_list', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','obyek.id as obyek_id','obyek.obyek_pidana','obyek.nilai_kontrak'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->where('kasus.id',$id)
            ->first();

        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('decay-case.rp3mum.rp3mum_create', ['case' => $case, 'jaksas' => $jaksas, 'kategori_subyek' => $kategori_subyek]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_kasus'   => 'required',
            'lembaga'       => 'required',
            'nilai_kontrak' => 'required',
            'obyek_pidana'  => 'required'
        ]);

        $kasus_id = $request->id;
        $status_rp2 = $request->status_rp2;
        if ($status_rp2 == Kasus::STATUS_DIALIHKAN OR $status_rp2 == Kasus::STATUS_DIHENTIKAN) {
            // Update status menjadi arsip
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2'));
            }

            $kasus_subyek = KasusSubyek::where('kasus_id',$kasus_id)->get();
            foreach ($kasus_subyek as $subyek) {
                $findSubyek = Subyek::find($subyek->subyek_id);
                if ($findSubyek) {
                    $findSubyek->update(['status' => 0]); 
                }
            }

        } else {
            $case = Kasus::find($kasus_id);
            if ($case) {
                $case->update($request->only('judul_kasus','kasus_posisi','disposisi','status_rp2') + ['status_rp3mum' => Kasus::STATUS_BARU]);

                $surat = Surat::create($request->only('no_surat_perkara','tanggal_surat_perkara') + ['kasus_id' => $case->id, 'tipe_surat' => 'RP3MUM']);
                if ($surat) {
                    $surat_id = $surat->id;
                    $anotherSprint = Surat::where('id','<>',$surat_id)
                        ->where('kasus_id', $kasus_id)
                        ->where('tipe_surat','=','RP3MUM')
                        ->get();
                    foreach ($anotherSprint as $sprint) {
                        $sprint_id = $sprint->id;
                        $findSprint = Surat::find($sprint_id);
                        $findSprint->update(['status_surat' => 0]);
                    }
                }

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

        // Update subyek
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id'));
        }

        // Update obyek
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'));
        }

        return redirect()->route('rp3mum.index');
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
        $case = Kasus::select(['kasus.*','subyek.id as subyek_id','subyek.nama_terlapor','subyek.lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id','obyek.id as obyek_id','obyek.obyek_pidana','obyek.nilai_kontrak','kerugian_negara','pemulihan_aset','surats.id as surat_id','surats.tanggal_surat_perkara','surats.no_surat_perkara'])
            ->join('kasus_subyek','kasus.id','=','kasus_subyek.kasus_id')
            ->join('subyek','kasus_subyek.subyek_id','=','subyek.id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','kasus_obyek.obyek_id','=','obyek.id')
            ->join('surats','surats.kasus_id','=','kasus.id')
            ->where('kasus.id',$id)
            ->where('surats.tipe_surat','=','RP3MUM')
            ->first();

        $surat_jaksa = SuratJaksa::select(['surat_jaksa.*','nama_jaksa'])
            ->join('jaksas','surat_jaksa.jaksa_id','=','jaksas.id')
            ->where('surat_id', $case->surat_id)
            ->orderBy('nama_jaksa')
            ->get();

        $jaksas = Jaksa::select(['*'])
            ->orderBy('nama_jaksa')
            ->pluck('nama_jaksa', 'id');

        $kategori_subyek = KategoriSubyek::select(['*'])
            ->orderBy('name')
            ->pluck('name', 'id');

        return view('decay-case.rp3mum.rp3mum_edit', ['case' => $case, 'surat_jaksa' => $surat_jaksa, 'jaksas' => $jaksas, 'kategori_subyek' => $kategori_subyek, 'status_rp3mum' => $case->status_rp3mum]);
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
            'judul_kasus'   => 'required',
            'lembaga'       => 'required',
            'nilai_kontrak' => 'required',
            'obyek_pidana'  => 'required'
        ]);

        $case = Kasus::find($id);
        if ($case) {
            $case->update($request->only('judul_kasus','kasus_posisi','disposisi'));
        }
        
        $obyek = Obyek::find($request->obyek_id);
        if ($obyek) {
            $obyek->update($request->only('obyek_pidana','nilai_kontrak','kerugian_negara','pemulihan_aset'));
        }
        
        $subyek = Subyek::find($request->subyek_id);
        if ($subyek) {
            $subyek->update($request->only('nama_terlapor','lembaga','jabatan_resmi','jabatan_lain','kategori_subyek_id'));
        }

        $surat = Surat::find($request->surat_id);
        if ($surat) {
            $surat->update($request->only('tanggal_surat_perkara','no_surat_perkara'));
        }

        $jaksas = $request->jaksa_id;
        if ($jaksas && !empty($jaksas)) {
            foreach ($jaksas as $jaksa) {
                $jaksa_id = intval($jaksa);
                $findSuratJaksa = SuratJaksa::where('surat_id', $request->surat_id)
                    ->where('jaksa_id', $jaksa_id)
                    ->first();

                if (empty($findSuratJaksa)) {
                    $findJaksa = Jaksa::find($jaksa_id);
                    $surat->jaksas()->attach($findJaksa);
                }
            }
        }
        
        return redirect()->route('rp3mum.index');
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
