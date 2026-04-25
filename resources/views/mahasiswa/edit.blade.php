@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Edit Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
    </div>

    <form action="{{ route('mahasiswa.update', $data->id_mahasiswa) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">NIM</label>
            <input type="text" name="nim" value="{{ old('nim', $data->nim) }}" 
                class="w-full border border-gray-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none @error('nim') border-red-500 @enderror">
            @error('nim') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" 
                class="w-full border border-gray-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Jurusan</label>
            <select name="id_jurusan" class="w-full border border-gray-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                @foreach($jurusan as $j)
                    <option value="{{ $j->id_jurusan }}" {{ $data->id_jurusan == $j->id_jurusan ? 'selected' : '' }}>
                        {{ $j->nama_jurusan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg transition duration-200">
                Update Data Mahasiswa
            </button>
        </div>
    </form>
</div>
@endsection