<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaLengkap',
        'alamat',
        'noHp',
        'jenisKelamin',
        'tanggalLahir'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
