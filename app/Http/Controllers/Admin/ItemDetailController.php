<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\ItemDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;

class ItemDetailController extends Controller
{
    private function authorizePenyiar(SequenceItem $item)
    {
        if (Auth::user()->role === 'penyiar' && $item->sequence->host_id != Auth::id()) {
            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }
    }

    public function edit(SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $item->load('itemDetails');
        return view('admin.item-details.manage', compact('item'));
    }

    public function update(Request $request, SequenceItem $item)
    {
        $this->authorizePenyiar($item);
        $request->validate(['details' => 'nullable|array', 'details.*.jenis' => ['required', Rule::in(['ilm', 'spot', 'filler'])], 'details.*.isi' => 'required|string|max:255']);

        try {
            DB::transaction(function () use ($request, $item) {
                $item->itemDetails()->delete();
                if ($request->has('details')) {
                    $details = collect($request->details)->filter(fn($detail) => !empty($detail['isi']))->map(fn($detail) => ['jenis' => $detail['jenis'], 'isi' => $detail['isi'], 'dibuat_oleh' => Auth::id(), 'created_at' => now(), 'updated_at' => now()]);
                    if ($details->isNotEmpty()) {
                        $item->itemDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan item detail: ' . $e->getMessage());
        }

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.items.item-details.manage' : 'penyiar.items.item-details.manage';
        return redirect()->route($redirectRoute, $item)->with('success', 'ILM, Spot, & Filler berhasil diperbarui.');
    }
}
