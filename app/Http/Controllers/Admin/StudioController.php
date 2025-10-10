<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;

class StudioController extends Controller
{
    public function index()
    {
        $studios = Studio::latest()->paginate(10);
        return view('admin.studios.index', compact('studios'));
    }

    public function create()
    {
        return view('admin.studios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:studios,nama',
            'deskripsi' => 'nullable|string',
        ]);
        Studio::create($request->all());
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil ditambahkan.');
    }

    public function edit(Studio $studio)
    {
        return view('admin.studios.edit', compact('studio'));
    }

    public function update(Request $request, Studio $studio)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:studios,nama,' . $studio->id,
            'deskripsi' => 'nullable|string',
        ]);
        $studio->update($request->all());
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil diperbarui.');
    }

    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect()->route('admin.studios.index')->with('success', 'Studio berhasil dihapus.');
    }
}
