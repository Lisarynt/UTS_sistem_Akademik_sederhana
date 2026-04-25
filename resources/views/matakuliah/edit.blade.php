@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow border">
<div class="flex items-center justify-between mb-6">
    <h1 class="text-xl font-bold mb-4">Edit Matakuliah</h1>
    <a href="{{ route('matakuliah.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
</div>

    <form action="{{ route('matakuliah.update', $data->id_matakuliah) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-medium">Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" value="{{ $data->nama_matakuliah }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block text-sm font-medium">SKS</label>
            <input type="number" name="sks" value="{{ $data->sks }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block text-sm font-medium">Jurusan</label>
            <select name="id_jurusan" class="w-full border p-2 rounded">
                @foreach($jurusan as $j)
                    <option value="{{ $j->id_jurusan }}" {{ $data->id_jurusan == $j->id_jurusan ? 'selected' : '' }}>
                        {{ $j->nama_jurusan }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded w-full hover:bg-yellow-700">Update Matakuliah</button>
    </form>
</div>
@endsection