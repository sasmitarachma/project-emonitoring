<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $table = 'sponsorship';

    protected $fillable = [
        'asal_proposal',
        'judul_proposal',
        'waktu_masuk',
        'waktu_diterima',
        'approved',
        'disposisi',
        'nilai_diajukan',
        'nilai_diterima',
        'jumlah',
        'evidence_file',
    ];

}
