<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienDaftar extends Model
{
    use HasFactory;

    protected $table = 'pasiendaftar';
    protected $fillable = ['nama', 'nik', 'no_hp', 'tanggal', 'hari', 'id'];
}
