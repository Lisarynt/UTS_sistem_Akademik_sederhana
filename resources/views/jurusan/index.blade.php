@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm border">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Tabel Jurusan</h2>
        <a href="{{ route('jurusan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Data</a>
    </div>

    <form action="/jurusan" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Cari jurusan..." value="{{ request('search') }}" class="border p-2 rounded">
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Cari</button>
    </form>

    <table class="w-full border-collapse">
        <thead class="bg-gray-50 text-left">
            <tr>
                <th class="p-3 border">Nama Jurusan</th>
                <th class="p-3 border">Akreditasi</th>
                <th class="p-3 border text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $j)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border font-medium">{{ $j->nama_jurusan }}</td>
                    <td class="p-3 border text-center">
                        <span class="px-2 py-1 bg-gray-100 rounded text-sm font-bold">{{ $j->akreditasi }}</span>
                    </td>
                    <td class="p-3 border text-center">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('jurusan.edit', $j->id_jurusan) }}" class="text-yellow-600">Edit</a>
                            
                            <form action="{{ route('jurusan.destroy', $j->id_jurusan) }}" method="POST" onsubmit="return confirm('Hapus jurusan ini? Mahasiswa di dalamnya mungkin akan ikut terhapus.')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $jurusan->appends(['search' => request('search')])->links() }}
    </div>
</div>
@endsection