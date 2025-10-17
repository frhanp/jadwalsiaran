<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class NotificationComposer
{
    public function compose(View $view)
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Ambil 5 notifikasi terbaru yang belum dibaca
            $unreadNotifications = $user->unreadNotifications()->take(5)->get();
            $view->with('unreadNotifications', $unreadNotifications);
        }
    }
}