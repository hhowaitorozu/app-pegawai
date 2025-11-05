<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::latest()->paginate(10);
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)  
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:100|unique:departments,nama_departemen',
        ], [
            'nama_departemen.required' => 'Nama departemen wajib diisi',
            'nama_departemen.max' => 'Nama departemen maksimal 100 karakter',
            'nama_departemen.unique' => 'Nama departemen sudah ada'
        ]);
        
        Department::create($request->all());
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $department = Department::find($id);
        return view('departments.show', compact('department'));
    }

    public function edit(string $id)
    {
        $department = Department::find($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, string $id) 
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:100|unique:departments,nama_departemen,' . $id,
        ], [
            'nama_departemen.required' => 'Nama departemen wajib diisi',
            'nama_departemen.max' => 'Nama departemen maksimal 100 karakter',
            'nama_departemen.unique' => 'Nama departemen sudah ada'
        ]);
        
        $department = Department::findOrFail($id);
        $department->update($request->only([
            'nama_departemen',
        ]));
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil diperbarui');
    }

    public function destroy(string $id) 
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil dihapus');
    }
}