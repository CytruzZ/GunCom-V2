<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications()->latest()->get();
        $topShowcases = \App\Models\Showcase::with('user')->orderByDesc('likes')->take(5)->get();
        $topBuilders = \App\Models\User::withCount('buildProjects')->orderByDesc('build_projects_count')->take(5)->get();
        
        return view('notifications', compact('notifications', 'topShowcases', 'topBuilders'));
    }

    public function markAsRead($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        if (isset($notification->data['url'])) {
            return redirect($notification->data['url']);
        }

        return redirect()->back();
    }

    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back()->with('success', 'Semua notifikasi telah ditandai sebagai dibaca.');
    }
}
