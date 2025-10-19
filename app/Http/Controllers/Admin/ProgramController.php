<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use App\Models\Studio;

class ProgramController extends Controller
{

    private function authorizeAdminStudio(Program $program)
    {
        $admin = Auth::user();
        // Super admin (tidak terikat studio) boleh akses semua
        if (!$admin->studio_id) {
            return;
        }
        // Admin studio hanya boleh akses program di studionya
        if ($program->studio_id !== $admin->studio_id) {
            abort(403, 'AKSES DITOLAK. Anda hanya dapat mengelola program dari studio Anda.');
        }
    }

    public function index()
    {
        
        $admin = Auth::user();
        $query = Program::query(); // Mulai query builder

        // Jika admin terikat pada studio, filter program dari studio tersebut
        if ($admin->studio_id) {
            $query->where('studio_id', $admin->studio_id);
        }

        // Ambil data program yang sudah difilter
        $programs = $query->with(['studio', 'pembuat'])->latest()->paginate(10); 
        

        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        $admin = Auth::user();
        $studios = Studio::orderBy('nama')->get();
        return view('admin.programs.create', compact('studios', 'admin'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'studio_id' => 'required|exists:studios,id', // TAMBAHAN
        ]);
        Program::create($request->all() + ['dibuat_oleh' => Auth::id()]);
        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        // Redirect to sequence index for this program
        return redirect()->route('admin.programs.sequences.index', $program);
    }

    public function edit(Program $program)
    {
        $studios = Studio::orderBy('nama')->get(); // TAMBAHAN
        return view('admin.programs.edit', compact('program', 'studios'));
    }
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'studio_id' => 'required|exists:studios,id', // TAMBAHAN
        ]);
        $program->update($request->all());
        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('admin.programs.index')
            ->with('success', 'Program siaran berhasil dihapus.');
    }
}
