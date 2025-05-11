<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepBahanBahan extends Model
{
    protected $table = 'resep_bahan_bahan';
    protected $fillable = ['resep_id', 'bahan_bahan_id'];
}