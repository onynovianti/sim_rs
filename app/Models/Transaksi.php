<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;
use App\Models\Karyawan;
use App\Models\Dokter;
use App\Models\Obat;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'dokter_id',
        'pasien_id',
        'obat_id',
        'status',
    ];

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }

    public function karyawan(){
        return $this->belongsTo(Karyawan::class);
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }

    public function obat(){
        return $this->belongsTo(Obat::class);
    }
}
