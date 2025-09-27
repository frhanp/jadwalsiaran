<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SequenceItem;
use App\Models\MateriDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MateriDetailController extends Controller
{/**
     * Show the form for editing all details for an item.
     */
    public function edit(SequenceItem $item)
    {
        // Muat detail materi yang sudah ada untuk item ini
        $item->load('materiDetails');
        return view('admin.materi-details.manage', compact('item'));
    }

    /**
     * Update all details for an item based on array input.
     */
    public function update(Request $request, SequenceItem $item)
    {
        $request->validate([
            'details' => 'nullable|array',
            'details.*' => 'nullable|string|max:255',
        ]);

        try {
            DB::transaction(function () use ($request, $item) {
                // 1. Hapus semua detail yang ada untuk item ini
                $item->materiDetails()->delete();

                // 2. Buat ulang detail dari input array yang baru
                if ($request->has('details')) {
                    $details = collect($request->details)
                        ->filter() // Hapus nilai yang kosong atau null
                        ->map(function ($isi) {
                            return [
                                'isi' => $isi,
                                'dibuat_oleh' => Auth::id(),
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        });

                    if ($details->isNotEmpty()) {
                        $item->materiDetails()->createMany($details->all());
                    }
                }
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan detail materi: ' . $e->getMessage());
        }

        // Pastikan route name sudah benar sesuai file web.php
        return redirect()->route('admin.items.materi-details.manage', $item)
            ->with('success', 'Sub-list materi berhasil diperbarui.');
    }
}
