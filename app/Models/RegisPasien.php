<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisPasien extends Model
{
    use HasFactory;

    protected $table = 'regispasien';
    protected $fillable = ['nama', 'nik', 'dokter', 'no_antrian', 'waktu'];
}
