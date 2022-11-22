<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;
    protected $fillable = [
        'sessionID',
        'namaLengkap',
        'fiturGejala',
        'diagnosisPenyakit'
    ];
}
