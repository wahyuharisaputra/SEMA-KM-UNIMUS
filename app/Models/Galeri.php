<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['judul', 'file_foto', 'album_id'];

    public function album()
    {
        return $this->belongsTo(AlbumGaleri::class, 'album_id');
    }
}
