<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\Jurusan;


class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $matakuliah = Matakuliah::with('detail_jurusan')
            ->when($search, function($query) use ($search) {
                $query->where('nama_matakuliah', 'like', "%{$search}%");
            })
            ->paginate(5);

        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('matakuliah.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric',
            'id_jurusan' => 'required'
        ]);

        Matakuliah::create($request->all());
        return redirect('/matakuliah')->with('success', 'Matakuliah berhasil ditambah');
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
        $data = Matakuliah::findOrFail($id);
        $jurusan = Jurusan::all();
        return view('matakuliah.edit', compact('data', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Matakuliah::findOrFail($id);
        $data->update($request->all());
        return redirect('/matakuliah')->with('success', 'Matakuliah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matakuliah::destroy($id);
        return redirect('/matakuliah')->with('success', 'Matakuliah berhasil dihapus');
    }
}
