<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kodepos extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodepos',
        'kecamatan',
        'distrik'
    ];
}
