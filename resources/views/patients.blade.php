<x-layout>
    <x-slot:heading>  
        Daftar Pasien
    </x-slot:heading>
      
    <div class="space-y-4">
        @foreach ($patients as $patient)
        <a href="/patients/{{ $patient->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:bg-gray-100">
            <div class="font-bold text-blue-500 text-sm">{{ $patient->name }}</div>
            <div>
                <strong>Riwayat Penyakit:</strong> {{ $patient->medical_history }}.
            </div>
            <div>
                <strong>Tanggal Lahir:</strong> {{ $patient->dob }}.
            </div>
        </a>
        @endforeach
    </div>
</x-layout>
