<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Program;
use App\Models\Sequence;
use App\Models\Studio;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $viewData = [];

        switch ($user->role) {
            case 'admin':
                $viewData = [
                    'totalUsers' => User::count(),
                    'totalPrograms' => Program::count(),
                    'totalSequences' => Sequence::count(),
                    'totalStudios' => Studio::count(),
                ];
                break;

            case 'penyiar':
                // Menampilkan 5 sequence terdekat yang ditugaskan padanya
                $viewData = [
                    'jadwalTerdekat' => Sequence::with('program')
                        ->where('host_id', $user->id)
                        ->orderBy('waktu', 'asc')
                        ->take(5)
                        ->get(),
                ];
                break;

            case 'katim':
            case 'kepsta':
                // Tidak perlu data khusus, hanya tampilan berbeda
                break;
        }

        return view('dashboard', $viewData);
    }
}
