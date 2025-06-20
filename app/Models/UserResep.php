<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserResep extends Model
{
    protected $table = 'user_resep';
    protected $fillable = ['user_id', 'resep_id'];
    
}
