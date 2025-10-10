<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Sequence;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SequenceController extends Controller
{
    public function index(Program $program)
    {
        $sequences = $program->sequences()->with('host')->latest()->paginate(10);
        return view('admin.sequences.index', compact('program', 'sequences'));
    }

    public function create(Program $program)
    {
        $penyiars = User::where('role', 'penyiar')->get();
        return view('admin.sequences.create', compact('program', 'penyiars'));
    }

    public function store(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'host_id' => 'required|exists:users,id',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
        ]);

        $program->sequences()->create($request->all() + ['dibuat_oleh' => Auth::id()]);

        return redirect()->route('admin.programs.sequences.index', $program)
            ->with('success', 'Sequence berhasil ditambahkan.');
    }

    // AWAL MODIFIKASI
    public function edit(Sequence $sequence)
    {
        $program = $sequence->program;
        $penyiars = User::where('role', 'penyiar')->get();
        return view('admin.sequences.edit', compact('program', 'sequence', 'penyiars'));
    }

    public function update(Request $request, Sequence $sequence)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'host_id' => 'required|exists:users,id',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
        ]);

        $sequence->update($request->all());

        return redirect()->route('admin.programs.sequences.index', $sequence->program_id)
            ->with('success', 'Sequence berhasil diperbarui.');
    }

    public function updatePendengar(Request $request, Sequence $sequence)
    {
        // Otorisasi: hanya host dari sequence ini yang boleh update
        if (Auth::user()->role === 'penyiar' && $sequence->host_id != Auth::id()) {
            abort(403, 'AKSES DITOLAK.');
        }

        $request->validate([
            'jumlah_pendengar' => 'required|integer|min:0',
        ]);

        $sequence->update([
            'jumlah_pendengar' => $request->jumlah_pendengar,
        ]);

        return back()->with('success', 'Jumlah pendengar berhasil disimpan.');
    }

    public function destroy(Sequence $sequence)
    {
        $program = $sequence->program;
        $sequence->delete();

        return redirect()->route('admin.programs.sequences.index', $program)
            ->with('success', 'Sequence berhasil dihapus.');
    }
}
