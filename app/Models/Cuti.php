<?php

namespace App\Models;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuti extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_induk',
        'tgl_cuti',
        'lama_cuti',
        'keterangan',
        'sisa_cuti'
    ];

    public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class, 'no_induk', 'no_induk');
    }
}
