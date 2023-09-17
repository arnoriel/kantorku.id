<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'tanggal', 'jam_masuk', 'jam_piket', 'jam_pulang'];

    protected $fillable = ['nama', 'tanggal', 'jam_masuk', 'jam_piket', 'jam_pulang'];
    
}
