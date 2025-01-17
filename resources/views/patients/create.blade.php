<!-- resources/views/patients/create.blade.php -->
<x-layout>
    <x-slot:heading>
        Tambah Pasien Baru
    </x-slot:heading>

    <form action="{{ route('patients.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full" required>
        </div>

        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">Umur</label>
            <input type="number" id="age" name="age" class="mt-1 block w-full" required>
        </div>

        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">Tanggal cek</label>
            <input type="date" id="age" name="age" class="mt-1 block w-full" required>
        </div>

        <div>
            <label for="t_vital" class="block text-sm font-medium text-gray-700">Tanda Vital</label>
            <textarea id="t_vital" name="t_vital" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="ctt_obat" class="block text-sm font-medium text-gray-700">Catatan obat</label>
            <textarea id="ctt_obat" name="ctt_obat" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="keluhan" class="block text-sm font-medium text-gray-700">Keluhan</label>
            <textarea id="keluhan" name="keluhan" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="ctt_pas" class="block text-sm font-medium text-gray-700">Catatan pasien</label>
            <textarea id="ctt_pas" name="ctt_pas" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="anamnesa" class="block text-sm font-medium text-gray-700">Anamnesa</label>
            <textarea id="anamnesa" name="anamnesa" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="resep" class="block text-sm font-medium text-gray-700">Resep obat</label>
            <textarea id="resep" name="resep" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="hsl_lab" class="block text-sm font-medium text-gray-700">Hasil lab</label>
            <textarea id="hsl_lab" name="hsl_lab" class="mt-1 block w-full"></textarea>
        </div>

        <div>
            <label for="foto_mri" class="block text-sm font-medium text-gray-700">Foto MRI</label>
            <input type="file" id="foto_mri" name="foto_mri" class="mt-1 block w-full">
        </div>

        <div>
            <label for="foto_ctscan" class="block text-sm font-medium text-gray-700">Foto CT scan</label>
            <input type="file" id="foto_ctscan" name="foto_ctscan" class="mt-1 block w-full">
        </div>

        <div>
            <label for="foto_usg" class="block text-sm font-medium text-gray-700">Foto USG</label>
            <input type="file" id="foto_usg" name="foto_usg" class="mt-1 block w-full">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Pasien</button>
        </div>
    </form>
</x-layout>
