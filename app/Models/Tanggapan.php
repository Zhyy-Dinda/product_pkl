<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $primaryky = 'id_tanggapan';
    protected $fillable = [
        'id_tanggapan',
        'id_tanggapan',
        'tanggapan',
        'id_petugas',
    ];
}
