<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $fillable = [
        'idDiag',
        'name',
        'value'
    ];

    public function gejalas()
    {
        return $this->belongsTo(Diagnosa::class, 'idDiag');
    }

}
