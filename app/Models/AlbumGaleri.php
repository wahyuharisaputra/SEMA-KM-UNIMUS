<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumGaleri extends Model
{
    protected $fillable = ['nama', 'deskripsi'];

    public function galeris()
    {
        return $this->hasMany(Galeri::class, 'album_id');
    }
}
