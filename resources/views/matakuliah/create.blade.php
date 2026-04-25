@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow border">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-bold mb-4">Tambah Matakuliah</h1>
        <a href="{{ route('matakuliah.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
    </div>

    <form action="{{ route('matakuliah.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">SKS</label>
            <input type="number" name="sks" min="1" max="6" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Jurusan</label>
            <select name="id_jurusan" class="w-full border p-2 rounded" required>
                <option value="">-- Pilih Jurusan --</option>
                @foreach($jurusan as $j)
                    <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700">Simpan Matakuliah</button>
    </form>
</div>
@endsection