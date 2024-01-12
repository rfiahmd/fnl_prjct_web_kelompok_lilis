<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sd extends Model
{
    protected $table = 'sd';
    protected $fillable = ['nama', 'kelas', 'nis', 'tanggal_lahir', 'alamat'];
    protected $guarded = [];
}
