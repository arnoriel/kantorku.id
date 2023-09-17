<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'telepon', 'jk', 'alamat', 'ttl'];

    protected $fillable = ['nama', 'telepon', 'jk', 'alamat', 'ttl'];

}