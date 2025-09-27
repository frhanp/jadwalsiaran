<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use App\Models\SequenceItem;
use Illuminate\Support\Facades\Auth;

class SequenceItemController extends Controller
{
    public function index(Sequence $sequence)
    {
        $program = $sequence->program;
        $items = $sequence->items()->latest()->paginate(10);
        return view('admin.items.index', compact('program', 'sequence', 'items'));
    }

    public function create(Sequence $sequence)
    {
        $program = $sequence->program;
        return view('admin.items.create', compact('program', 'sequence'));
    }

    public function store(Request $request, Sequence $sequence)
    {
        $request->validate([
            'materi' => 'required|string|max:255',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
            'keterangan' => 'nullable|string',
        ]);

        $sequence->items()->create($request->all() + ['dibuat_oleh' => Auth::id()]);

        return redirect()->route('admin.sequences.items.index', $sequence)
            ->with('success', 'Materi siar berhasil ditambahkan.');
    }

    public function edit(SequenceItem $item)
    {
        $sequence = $item->sequence;
        $program = $sequence->program;
        return view('admin.items.edit', compact('program', 'sequence', 'item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $request->validate([
            'materi' => 'required|string|max:255',
            'frame' => 'nullable|string|max:255',
            'durasi' => 'nullable|numeric|min:0',
            'keterangan' => 'nullable|string',
        ]);

        $item->update($request->all());

        // AWAL MODIFIKASI
        return redirect()->route('admin.sequences.items.index', $item->sequence_id)
            ->with('success', 'Materi siar berhasil diperbarui.');
        // AKHIR MODIFIKASI
    }

    public function destroy(SequenceItem $item)
    {
        $sequence = $item->sequence;
        $item->delete();

        // AWAL MODIFIKASI
        return redirect()->route('admin.sequences.items.index', $sequence)
            ->with('success', 'Materi siar berhasil dihapus.');
        // AKHIR MODIFIKASI
    }
}
