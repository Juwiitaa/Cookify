<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
    protected $fillable = [
        'pengguna_id',
        'kategori_id',
        'judul',
        'cooking_time',
        'description',
        'steps',
        'photo'
    ];

    public function penggunas(){
        return $this->belongsTo(Resep::class);
    }

    public function kategoris(){
        return $this->belongsToMany(Kategori::class);
    }

    public function bahans(){
        return $this->belongsToMany(BahanBahan::class);
    }
}
