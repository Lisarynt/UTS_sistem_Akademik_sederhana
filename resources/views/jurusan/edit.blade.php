@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow border">
<div class="flex items-center justify-between mb-6">
    <h1 class="text-xl font-bold mb-4">Edit Jurusan</h1>
    <a href="{{ route('jurusan.index') }}" class="text-sm text-gray-500 hover:text-gray-700">← Kembali</a>
</div>
    <form action="{{ route('jurusan.update', $data->id_jurusan) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" value="{{ $data->nama_jurusan }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="block text-sm font-medium">Akreditasi</label>
            <select name="akreditasi" class="w-full border p-2 rounded">
                <option value="A" {{ $data->akreditasi == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ $data->akreditasi == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ $data->akreditasi == 'C' ? 'selected' : '' }}>C</option>
            </select>
        </div>

        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded w-full hover:bg-yellow-700">Update Jurusan</button>
    </form>
</div>
@endsection