<?php

namespace App\Pidsus;

use Illuminate\Database\Eloquent\Model;
use App\Pidsus\Jaksa;
use App\Pidsus\Pidsus\Obyek;
use App\Pidsus\Pasal;

class Surat extends Model
{
	protected $table = 'surats';
    protected $fillable = [
    	'judul_surat', 
    	'no_surat_perkara', 
    	'tanggal_surat_perkara',
    	'tanggal_mulai',
    	'tanggal_berhenti',
        'tindakan',
        'keterangan',
    	'tipe_surat',
        'kasus_id',
        'status_surat'
    ];

    public function jaksas()
    {
        return $this->belongsToMany(Jaksa::class, 'surat_jaksa', 'surat_id', 'jaksa_id');
    }

    public function obyeks()
    {
        return $this->belongsToMany(Obyek::class, 'surat_obyek', 'surat_id', 'obyek_id');
    }

    public function pasals()
    {
        return $this->belongsToMany(Pasal::class, 'surat_pasal', 'surat_id', 'pasal_id');
    }
}
