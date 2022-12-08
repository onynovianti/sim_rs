<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaLengkap',
        'username',
        'password',
        'alamat',
        'noHp',
        'jenisKelamin',
        'tempatLahir',
        'tanggalLahir'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
