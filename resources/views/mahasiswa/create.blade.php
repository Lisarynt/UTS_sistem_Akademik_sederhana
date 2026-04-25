@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow border">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-bold mb-4">Tambah Mahasiswa</h1>
        <a href="{{ route('mahasiswa.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
    </div>

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">NIM</label>
            <input type="text" name="nim" class="w-full border p-2 rounded @error('nim') border-red-500 @enderror">
            @error('nim') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Nama</label>
            <input type="text" name="nama" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block text-sm font-medium">Jurusan</label>
            <select name="id_jurusan" class="w-full border p-2 rounded">
                <option value="">-- Pilih Jurusan --</option>
                @foreach($jurusan as $j)
                    <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection