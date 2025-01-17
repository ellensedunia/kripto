<!-- resources/views/patients/index.blade.php -->
<x-layout>
    <x-slot:heading>
        Daftar Pasien
    </x-slot:heading>

    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif

    <div class="space-y-4">
        @foreach ($patients as $patient)
        <div class="px-4 py-6 border border-gray-200 rounded-lg">
            <div>
                <strong>{{ $patient->name }}</strong> (Umur: {{ $patient->age }})
            </div>
            <div>
                <a href="{{ route('patients.show', $patient->id) }}" class="text-blue-500">Lihat Riwayat Kesehatan</a>
            </div>
            <div>
                <a href="{{ route('patients.edit', $patient->id) }}" class="text-blue-500">Edit</a>
            </div>
            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Hapus</button>
            </form>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $patients->links() }}
    </div>
</x-layout>
