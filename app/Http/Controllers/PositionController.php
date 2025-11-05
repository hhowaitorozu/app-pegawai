<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::latest()->paginate(10);
        return view('positions.index', compact('positions'));
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store(Request $request)  
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100',
            'nama_departemen' => 'required|numeric|min:0',
        ], [
            'nama_jabatan.required' => 'Nama jabatan wajib diisi',
            'nama_jabatan.max' => 'Nama jabatan maksimal 100 karakter',
            'nama_departemen.required' => 'Nama departemen wajib diisi',
            'nama_departemen.numeric' => 'Nama departemen harus berupa angka',
            'nama_departemen.min' => 'Nama departemen tidak boleh negatif',
        ]);
        
        Position::create($request->all());
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $position = Position::find($id);
        return view('positions.show', compact('position'));
    }

    public function edit(string $id)
    {
        $position = Position::find($id);
        return view('positions.edit', compact('position'));
    }

    public function update(Request $request, string $id) 
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100',
            'nama_departemen' => 'required|numeric|min:0',
        ], [
            'nama_jabatan.required' => 'Nama jabatan wajib diisi',
            'nama_jabatan.max' => 'Nama jabatan maksimal 100 karakter',
            'nama_departemen.required' => 'Nama departemen wajib diisi',
            'nama_departemen.numeric' => 'Nama departemen harus berupa angka',
            'nama_departemen.min' => 'Nama departemen tidak boleh negatif',
        ]);
        
        $position = Position::findOrFail($id);
        $position->update($request->only([
            'nama_jabatan',
            'nama_departemen',
        ]));
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil diperbarui');
    }

    public function destroy(string $id) 
    {
        $position = Position::find($id);
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil dihapus');
    }
}