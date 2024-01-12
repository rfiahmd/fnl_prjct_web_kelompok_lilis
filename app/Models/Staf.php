<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $table = 'staf';
    protected $fillable = ['name', 'nip', 'jenis_kelamin', 'alamat', 'email', 'no_hp'];
    protected $guarded = [];
}
