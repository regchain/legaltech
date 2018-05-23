<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Punishment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'pangkat_nip_nrp_jabatan',
        'pasal',
        'uraian',
        'hukuman',
        'keputusan_pejabat',
        'keputusan_nomor_tanggal',
        'keputusan_pelaksanaan',
        'selesai',
        'keterangan'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];
}
