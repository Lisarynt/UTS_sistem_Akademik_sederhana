<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $jurusan = Jurusan::when($search, function($query) use ($search) {
            $query->where('nama_jurusan', 'like', "%{$search}%")
                  ->orWhere('akreditasi', 'like', "%{$search}%");
        })
        ->paginate(5); 

        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'akreditasi' => 'required|max:2',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan!');
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
        $data = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Jurusan::findOrFail($id);

        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'akreditasi' => 'required|max:2',
        ]);

        $data->update($request->all());

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jurusan::destroy($id);
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus!');
    }
}
