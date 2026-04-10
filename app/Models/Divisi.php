<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $fillable = ['nama', 'deskripsi'];

    public function programKerjas()
    {
        return $this->hasMany(ProgramKerja::class, 'divisi_id');
    }
}
