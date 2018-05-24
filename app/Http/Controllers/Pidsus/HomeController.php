<?php

namespace App\Http\Controllers\Pidsus;

use Illuminate\Http\Request;
use App\Pidsus\Kasus;
use App\Pidsus\Subyek;
use App\Pidsus\KategoriSubyek;
use App\Pidsus\Pasal;
use App\Pidsus\Spt;
use App\Pidsus\Surat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_bulan = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        $kategori_obyek = array();
        $dashboard = array();
        
        $kasus_rp2 = Kasus::where('status_rp2',1)
            ->where('status_rp3mum', 0)
            ->count();

        $kasus_rp3mum = Kasus::where('status_rp3mum',1)
            ->where('status_rp3sus', 0)
            ->count();

        $kasus_rp3sus = Spt::join('kasus','spt.kasus_id','=','kasus.id')
            ->join('surats','spt.surat_id','=','surats.id')
            ->where('surats.tipe_surat','=','RP3SUS')
            ->where('kasus.status_rp3sus',1)->count();

        $tahanan = Subyek::where('status', Subyek::STATUS_TAHANAN)->count();
        
        $subyek_hukum = KategoriSubyek::selectRaw('name, count(kategori_subyek_id) as total')
            ->join('subyek','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->where('subyek.status','<>',0)
            ->groupBy('kategori_subyeks.name')
            ->get();

        $obyek_pidana = Pasal::selectRaw('kategori_pasal, count(obyek.id) as total')
            ->join('surat_pasal','pasals.id','=','surat_pasal.pasal_id')
            ->join('surats','surats.id','=','surat_pasal.surat_id')
            ->join('kasus','kasus.id','=','surats.kasus_id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','obyek.id','=','kasus_obyek.obyek_id')
            ->where('kasus.status_rp3sus','<>',0)
            ->groupBy('kategori_pasal')
            ->get();

        $kerugian_pemulihan = Surat::selectRaw('substr(tanggal_surat_perkara, 6, 2) as bulan, SUM(nilai_pemulihan_aset) as pemulihan_aset, SUM(kerugian_negara) as kerugian_negara')
            ->join('barang_bukti','surats.id','=','barang_bukti.surat_id')
            ->join('obyek','obyek.id','=','barang_bukti.obyek_id')
            ->whereIn('tipe_surat', array('PENYITAAN', 'PENGGELEDAHAN', 'PENITIPAN'))
            ->groupBy('bulan')
            ->get();

        $masa_tahanan = Subyek::selectRaw('subyek.id as subyek_id, kasus.id as kasus_id, nama_terlapor, masa_hukuman, kategori_subyeks.name as kategori_subyek, obyek_pidana')
            ->join('kategori_subyeks','kategori_subyeks.id','=','subyek.kategori_subyek_id')
            ->join('kasus_subyek','subyek.id','=','kasus_subyek.subyek_id')
            ->join('kasus','kasus.id','=','kasus_subyek.kasus_id')
            ->join('kasus_obyek','kasus.id','=','kasus_obyek.kasus_id')
            ->join('obyek','obyek.id','=','kasus_obyek.obyek_id')
            ->where('subyek.status', Subyek::STATUS_TAHANAN)
            ->get();
        
        foreach ($masa_tahanan as $masa) {
            $subyek_id = $masa["subyek_id"];
            $kasus_id = $masa["kasus_id"];

            $spt_kasus = Spt::selectRaw('surat_id')
                ->join('spt_subyek','spt.id','=','spt_subyek.spt_id')
                ->where('kasus_id', $kasus_id)
                ->where('spt_subyek.subyek_id', $subyek_id)
                ->where('jenis_spt', 'TERSANGKA')
                ->orderBy('spt.id', 'DESC')
                ->first();

            if ($spt_kasus) {
                $surat_id = $spt_kasus->surat_id;
                $pasals = Surat::selectRaw('GROUP_CONCAT(kategori_pasal) as kategori_obyek')
                    ->join('surat_pasal','surats.id','=','surat_pasal.surat_id')
                    ->join('pasals','pasals.id','=','surat_pasal.pasal_id')
                    ->where('surats.id', $surat_id)
                    ->first();
                if ($pasals) {
                    $result = $pasals->kategori_obyek;
                    $kategori_pasal = implode(',',array_unique(explode(',', $result)));
                }
            }

            $masa["kategori_obyek"] = $kategori_pasal;
            array_push($kategori_obyek, $masa);
        }
        
        $dashboard["kasus_rp2"] = $kasus_rp2;
        $dashboard["kasus_rp3mum"] = $kasus_rp3mum;
        $dashboard["kasus_rp3sus"] = $kasus_rp3sus;
        $dashboard["tahanan"] = $tahanan;

        return view('pidsus.dik.dashboard.home', ['dashboard' => $dashboard, 'subyek_hukum' => $subyek_hukum, 'obyek_pidana' => $obyek_pidana, 'kerugian_pemulihan' => $kerugian_pemulihan, 'nama_bulan' => $nama_bulan, 'masa_tahanan' => $kategori_obyek]);
    }

    public function trial()
    {
        return view('trial');
    }
  
    public function master_penyidikan()
    {
        return view('master_penyidikan');
    }

    public function master_penuntutan()
    {
        return view('master_penuntutan');
    }
}
