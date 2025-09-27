<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{public function index()
    {
        $programs = Program::with('pembuat')->latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Program::create($request->all() + ['dibuat_oleh' => Auth::id()]);

        return redirect()->route('admin.programs.index')
            ->with('success', 'Program siaran berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        // Redirect to sequence index for this program
        return redirect()->route('admin.programs.sequences.index', $program);
    }

    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $program->update($request->all());

        return redirect()->route('admin.programs.index')
            ->with('success', 'Program siaran berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('admin.programs.index')
            ->with('success', 'Program siaran berhasil dihapus.');
    }
}
