@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow border">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-bold mb-4">Tambah Jurusan</h1>
        <a href="{{ route('jurusan.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
</div>
    <form action="{{ route('jurusan.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="w-full border p-2 rounded @error('nama_jurusan') border-red-500 @enderror" placeholder="Contoh: Teknik Informatika">
            @error('nama_jurusan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Akreditasi</label>
            <select name="akreditasi" class="w-full border p-2 rounded">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700">Simpan Jurusan</button>
    </form>
</div>
@endsection