<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Jurusan;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Search & Pagination
        $mahasiswa = Mahasiswa::with('detail_jurusan')
            ->when($search, function($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('nim', 'like', "%{$search}%")
                    ->orWhereHas('detail_jurusan', function($q) use ($search) {
                        $q->where('nama_jurusan', 'like', "%{$search}%");
                    });
            })
            ->paginate(5); 

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all(); 
        return view('mahasiswa.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'id_jurusan' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::findOrFail($id);
        $jurusan = Jurusan::all(); 
        
        return view('mahasiswa.edit', compact('data', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->update($request->all());

        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}
