<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
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
        'foto_usg',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    
}
