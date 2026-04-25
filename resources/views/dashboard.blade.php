@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-md p-8 border border-gray-100">
    <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p class="text-gray-600 mt-2">Ini adalah sistem manajemen akademik sederhana untuk UTS Pemrograman Web 2 menggunakan Tailwind</p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="p-6 bg-blue-50 rounded-lg border border-blue-100">
            <h3 class="font-bold text-blue-800">Data Jurusan</h3>
            <p class="text-sm text-blue-600">Kelola data program studi dan akreditasi.</p>
        </div>
        <div class="p-6 bg-indigo-50 rounded-lg border border-indigo-100">
            <h3 class="font-bold text-indigo-800">Data Mahasiswa</h3>
            <p class="text-sm text-indigo-600">Kelola data mahasiswa beserta relasi jurusan.</p>
        </div>
        <div class="p-6 bg-purple-50 rounded-lg border border-purple-100">
            <h3 class="font-bold text-purple-800">Data Matakuliah</h3>
            <p class="text-sm text-purple-600">Kelola mata kuliah dan relasi jurusan.</p>
        </div>
    </div>
</div>
@endsection