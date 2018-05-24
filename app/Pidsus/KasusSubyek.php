<?php

namespace App\Pidsus;

use Illuminate\Database\Eloquent\Model;

class KasusSubyek extends Model
{
    protected $table = 'kasus_subyek';
    protected $fillable = [
        'kasus_id',
        'subyek_id'
    ];

}
