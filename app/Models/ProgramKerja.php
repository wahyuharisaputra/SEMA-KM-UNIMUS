<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    protected $fillable = [
        'nama', 'slug', 'deskripsi', 'tujuan', 
        'timeline_start', 'timeline_end', 
        'status_pelaksanaan', 'divisi_id'
    ];

    protected $casts = [
        'timeline_start' => 'date',
        'timeline_end' => 'date',
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }
}
