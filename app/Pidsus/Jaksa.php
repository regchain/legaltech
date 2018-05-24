<?php

namespace App\Pidsus;

use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
	protected $table = 'jaksas';
    protected $fillable = ['nip', 'nama_jaksa', 'pangkat', 'telepon'];
}
