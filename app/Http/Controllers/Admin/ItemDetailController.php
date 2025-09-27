<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\ItemDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ItemDetailController extends Controller
{
    /**
     * Show the form for editing all item details for a sequence item.
     */
    public function edit(SequenceItem $item)
    {
        $item->load('itemDetails');
        return view('admin.item-details.manage', compact('item'));
    }

    /**
     * Update all item details for a sequence item based on array input.
     */
    public function update(Request $request, SequenceItem $item)
    {
        $request->validate([
            'details' => 'nullable|array',
            'details.*.jenis' => ['required', Rule::in(['ilm', 'spot', 'filler'])],
            'details.*.isi' => 'required|string|max:255',
        ]);

        try {
            DB::transaction(function () use ($request, $item) {
                // 1. Hapus semua item detail yang ada
                $item->itemDetails()->delete();

                // 2. Buat ulang dari input array yang baru
                if ($request->has('details')) {
                    $details = collect($request->details)
                        ->filter(fn($detail) => !empty($detail['isi'])) // Hanya proses jika 'isi' tidak kosong
                        ->map(fn($detail) => [
                            'jenis' => $detail['jenis'],
                            'isi' => $detail['isi'],
                            'dibuat_oleh' => Auth::id(),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);

                    if ($details->isNotEmpty()) {
                        $item->itemDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan item detail: ' . $e->getMessage());
        }

        return redirect()->route('admin.items.item-details.manage', $item)
            ->with('success', 'ILM, Spot, & Filler berhasil diperbarui.');
    }
}
