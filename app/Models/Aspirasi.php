<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $fillable = ['nama', 'fakultas', 'isi_aspirasi', 'status_tindak_lanjut'];
}
