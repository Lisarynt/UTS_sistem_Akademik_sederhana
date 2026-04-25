@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm border">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Tabel Mahasiswa</h2>
        <a href="{{ route('mahasiswa.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Data</a>
    </div>

    <form action="/mahasiswa" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Cari..." value="{{ request('search') }}" class="border p-2 rounded">
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Cari</button>
    </form>

    <table class="w-full border-collapse">
        <thead class="bg-gray-50 text-left">
            <tr>
                <th class="p-3 border">Nim</th>
                <th class="p-3 border">Nama</th>
                <th class="p-3 border">Jurusan</th>
                <th class="p-3 border text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border">{{ $mhs->nim }}</td>
                    <td class="p-3 border font-medium">{{ $mhs->nama }}</td>
                    <td class="p-3 border">{{ $mhs->detail_jurusan->nama_jurusan }}</td>
                    <td class="p-3 border text-center">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('mahasiswa.edit', $mhs->id_mahasiswa) }}" class="text-yellow-600">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id_mahasiswa) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $mahasiswa->appends(['search' => request('search')])->links() }}
    </div>
</div>
@endsection