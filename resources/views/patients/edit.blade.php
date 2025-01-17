<!-- resources/views/patients/edit.blade.php -->
<x-layout>
    <x-slot:heading>
        Edit Data Pasien
    </x-slot:heading>

    <form action="{{ route('patients.update', $patient->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $patient->name) }}" class="mt-1 block w-full" required>
        </div>

        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">Umur</label>
            <input type="number" id="age" name="age" value="{{ old('age', $patient->age) }}" class="mt-1 block w-full" required>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Tanggal cek</label>
            <input type="date" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Tanda Vital</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Catatan obat</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Keluhan</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Catatan pasien</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Anamnesa</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Resep Obat</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Hasil lab</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Foto MRI</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Foto CT scan</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <label for="medical_records" class="block text-sm font-medium text-gray-700">Foto USG</label>
            <textarea id="medical_records" name="medical_records" class="mt-1 block w-full">{{ old('medical_records', $patient->medical_records) }}</textarea>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Pasien</button>
        </div>
    </form>
</x-layout>
