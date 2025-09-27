<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sequence;
use App\Models\SequenceItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SequenceItemController extends Controller
{
    private function authorizePenyiar(Sequence $sequence)
    {
        if (Auth::user()->role === 'penyiar' && $sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES KE JADWAL INI.');
        }
    }

    public function index(Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $program = $sequence->program;
        $items = $sequence->items()->latest()->paginate(10);
        return view('admin.items.index', compact('program', 'sequence', 'items'));
    }

    public function create(Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $program = $sequence->program;
        return view('admin.items.create', compact('program', 'sequence'));
    }

    public function store(Request $request, Sequence $sequence)
    {
        $this->authorizePenyiar($sequence);
        $request->validate(['materi' => 'required|string|max:255', 'frame' => 'nullable|string|max:255', 'durasi' => 'nullable|numeric|min:0', 'keterangan' => 'nullable|string',]);
        $sequence->items()->create($request->all() + ['dibuat_oleh' => Auth::id()]);
        
        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $sequence)->with('success', 'Materi siar berhasil ditambahkan.');
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $sequence = $item->sequence;
        $program = $sequence->program;
        return view('admin.items.edit', compact('program', 'sequence', 'item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $request->validate(['materi' => 'required|string|max:255', 'frame' => 'nullable|string|max:255', 'durasi' => 'nullable|numeric|min:0', 'keterangan' => 'nullable|string',]);
        $item->update($request->all());

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $item->sequence_id)->with('success', 'Materi siar berhasil diperbarui.');
    }

    public function destroy(SequenceItem $item)
    {
        $this->authorizePenyiar($item->sequence);
        $sequence = $item->sequence;
        $item->delete();

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.index' : 'penyiar.sequences.items.index';
        return redirect()->route($redirectRoute, $sequence)->with('success', 'Materi siar berhasil dihapus.');
    }
}
