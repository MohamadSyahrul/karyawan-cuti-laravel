<?php

namespace App\Models;

use App\Models\Cuti;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_induk',
        'nama',
        'alamat',
        'tgl_lahir',
        'tgl_gabung'
    ];

    public function cuti()
    {
    	return $this->hasOne(Cuti::class, 'no_induk', 'no_induk');
    }

}
