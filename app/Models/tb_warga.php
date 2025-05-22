<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_warga extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pos',
        'dusun',
        'alamat',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'agama',
        'nik',
        'kk',
        'ibu_kandung',
        'ayah_kandung',
    ];
}
