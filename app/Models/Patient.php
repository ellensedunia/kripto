<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'age', 
        'tgl_cek', 
        't_vital', 
        'ctt_obat',
        'keluhan', 
        'ctt_pas', 
        'anamnesa', 
        'resep',
        'hsl_lab', 
        'foto_mri', 
        'foto_ctscan', 
        'foto_usg'
    ];

}