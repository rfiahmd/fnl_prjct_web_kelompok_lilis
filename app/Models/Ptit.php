<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptit extends Model
{
    protected $table = 'ptit';
    protected $fillable = ['nama', 'kelas', 'nis', 'tanggal_lahir', 'alamat'];
    protected $guarded = [];
}
