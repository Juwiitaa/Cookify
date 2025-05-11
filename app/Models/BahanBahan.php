<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanBahan extends Model
{
    protected $table = 'bahan_bahan';
    protected $fillable = ['name'];

    public function reseps(){
        return $this->belongsToMany(Resep::class);
    }
}