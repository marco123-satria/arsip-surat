<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $fillable = [
        'nomor',
        'tanggal',
        'pengirim',
        'perihal',
        'tanggal_terima',
        'dokumen',
    ];
}
