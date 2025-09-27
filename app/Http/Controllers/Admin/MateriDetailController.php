<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\MateriDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class MateriDetailController extends Controller
{/**

     * Show the form for editing all details for an item.
     */
    private function authorizePenyiar(SequenceItem $item)
    {
        if (Auth::user()->role === 'penyiar' && $item->sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $item->load('materiDetails');
        return view('admin.materi-details.manage', compact('item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $request->validate(['details' => 'nullable|array', 'details.*' => 'nullable|string|max:255']);

        try {
            DB::transaction(function () use ($request, $item) {
                $item->materiDetails()->delete();
                if ($request->has('details')) {
                    $details = collect($request->details)->filter()->map(function ($isi) {
                        return ['isi' => $isi, 'dibuat_oleh' => Auth::id(), 'created_at' => now(), 'updated_at' => now()];
                    });
                    if ($details->isNotEmpty()) {
                        $item->materiDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan detail materi: ' . $e->getMessage());
        }

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.items.materi-details.manage' : 'penyiar.items.materi-details.manage';
        return redirect()->route($redirectRoute, $item)->with('success', 'Sub-list materi berhasil diperbarui.');
    }
}
