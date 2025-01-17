<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //datfat semua data pasien
    public function index()
    {
        //ambil data dari database
        $patients = Patient::latest()->simplePaginate(10);
        return view('patients.index', ['patients' => $patients]);
    }

    //form tambah data 
    public function create()
    {
        return view('patients.create');
    }

    //simpan data ke database
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:120',
            'tgl_cek' => 'nullable|string',
            't_vital' => 'nullable|string',
            'keluhan' => 'nullable|string',
            'ctt_pas' => 'nullable|string',
            'ctt_obat' => 'nullable|string',
            'anamnesa' => 'nullable|string',
            'resep' => 'nullable|string',
            'hsl_lab' => 'nullable|string',
            'foto_mri' => 'nullable|string',
            'foto_ctscan' => 'nullable|string',
            'foto_usg' => 'nullable|string',

        ]);
        
        Patient::create($validatedData);

        return redirect()->route('patients.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    //tampilkan data berdasarkan id
    public function show(Patient $patient)
    {
        return view('patients.show', ['patient' => $patient]);
    }

    //edit form 
    public function edit(Patient $patient)
    {
        return view('patients.edit', ['patient' => $patient]);
    }

    //update dtaa yang sudah ada
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:120',
            'tgl_cek' => 'nullable|string',
            't_vital' => 'nullable|string',
            'keluhan' => 'nullable|string',
            'ctt_pas' => 'nullable|string',
            'ctt_obat' => 'nullable|string',
            'anamnesa' => 'nullable|string',
            'resep' => 'nullable|string',
            'hsl_lab' => 'nullable|string',
            'foto_mri' => 'nullable|string',
            'foto_ctscan' => 'nullable|string',
            'foto_usg' => 'nullable|string',
        ]);

        // Mengupdate data di database
        $patient->update($validatedData);

        return redirect()->route('patients.show', $patient)->with('success', 'Data pasien berhasil diperbarui.');
    }

    //hapus data sdari database
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index', $patient)->with('success', 'Data pasien berhasil dihapus.');
    }
}
