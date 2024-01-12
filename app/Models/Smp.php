<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smp extends Model
{
    protected $table = 'smp';
    protected $fillable = ['nama', 'kelas', 'nis', 'tanggal_lahir', 'alamat'];
    protected $guarded = [];
}
