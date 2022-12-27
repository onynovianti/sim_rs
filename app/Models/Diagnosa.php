<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaLengkap',
        'diagnosisPenyakit'
    ];

    public function gejalas()
    {
        return $this->hasMany(Gejala::class, 'idDiag', 'id');
    }

    public function penyakits()
    {
        return $this->hasMany(Penyakit::class, 'idDiag', 'id');
    }
}
