<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = [
        'user_id',
        'kategori_id',
        'judul',
        'bahan',
        'description',
        'steps',
        'photo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userFavorits(){
        return $this->belongsToMany(User::class,)->withTimestamps();
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

}
