<?php namespace App\Http\Controllers\WasElapdu;

use Illuminate\Http\Request;
use App\Pidsus\Http\Controllers\Controller;
use App\Pidsus\Models\Punishment;

class OperatorController extends Controller
{
    public function index()
    {
        $counts = [];
        $datas = Punishment::get();
        $counts['berat'] = Punishment::where('keterangan', 'BERAT')->count();
        $counts['ringan'] = Punishment::where('keterangan', 'RINGAN')->count();
        $counts['sedang'] = Punishment::where('keterangan', 'SEDANG')->count();
        $counts['berhenti'] = Punishment::where('keterangan', 'BERHENTI SEMENTARA')->count();
        return view('was.elapdu.process.home', compact('datas', 'counts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $file = $request->file('file');
        $path = $file->getRealPath();
        $data = \Excel::load($path, function ($reader) {})->get();
        if(!empty($data) && $data->count()){
            foreach ($data as $key => $value) {
                if ($value['nama'] && gettype($value['nama']) == 'string') {
                    $insert[] = [
                        'nama' => $value['nama'],
                        'pangkat_nip_nrp_jabatan' => $value['pangkat_nip_nrp_jabatan'],
                        'pasal' => $value['melanggar_pasal'],
                        'uraian' => $value['uraian_singkat_perbuatan'],
                        'hukuman' => $value['hukuman_disiplin_yang_dijatuhkan'],
                        'keputusan_pejabat' => $value['putusan'],
                        'keputusan_nomor_tanggal' => $value['0'],
                        'keputusan_pelaksanaan' => $value['_1'],
                        'selesai' => $value['selesai'],
                        'keterangan' => $value['keterangan'],
                    ];
                }
            }

            if(!empty($insert)){
                \DB::table('punishments')->insert($insert);
                // dd('Insert Record successfully.');
            }

            return redirect('/was/elapdu/operator');
        }
    }
    public function generic()
    {
        return view('was.elapdu.process.generic');
    }
    public function elements()
    {
        return view('was.elapdu.process.elements');
    }
}