<!-- resources/views/patients/show.blade.php -->
<x-layout>
    <x-slot:heading>
        Riwayat Kesehatan Pasien
    </x-slot:heading>

    <div class="space-y-4">
        <div>
            <strong>Nama:</strong> {{ $patient->name }}
        </div>
        <div>
            <strong>Umur:</strong> {{ $patient->age }}
        </div>
        <div>
            <strong>Riwayat Kesehatan:</strong> {{ $patient->medical_records }}
        </div>

        <div>
            <a href="{{ route('patients.index') }}" class="text-blue-500">Kembali ke Daftar Pasien</a>
        </div>
    </div>
</x-layout>
