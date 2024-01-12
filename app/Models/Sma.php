<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sma extends Model
{
    protected $table = 'sma';
    protected $fillable = ['nama', 'kelas', 'nis', 'tanggal_lahir', 'alamat'];
    protected $guarded = [];
}

