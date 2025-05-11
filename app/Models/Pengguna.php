<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['name', 'email', 'password', 'role'];

    public function reseps(){
        return $this->hasMany(Pengguna::class);
    }
}
