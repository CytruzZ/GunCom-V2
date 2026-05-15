<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Showcase;
use App\Models\Forum;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('my-profile', compact('user'));
    }

    public function posts($id)
    {
        $user = User::findOrFail($id);
        return view('my-profile-post', compact('user'));
    }

    public function forum($id)
    {
        $user = User::findOrFail($id);
        return view('my-profile-question', compact('user'));
    }

    public function buildlog($id)
    {
        $user = User::findOrFail($id);
        $ongoingBuilds = $user->buildProjects()->where('status', 'ongoing')->latest()->get();
        $completedBuilds = $user->buildProjects()->where('status', 'completed')->latest()->get();
        return view('my-profile-achievement', compact('user', 'ongoingBuilds', 'completedBuilds'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return back();
        }

        $users = User::where('name', 'like', "%{$query}%")
            ->orWhere('bio', 'like', "%{$query}%")
            ->with([
                'showcases' => function ($q) {
                    $q->latest()->take(5);
                },
                'forums' => function ($q) {
                    $q->latest()->take(3);
                }
            ])
            ->get();

        $showcases = Showcase::where('description', 'like', "%{$query}%")
            ->with('user')
            ->latest()
            ->get();

        $forums = Forum::where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->with(['user', 'comments'])
            ->latest()
            ->get();

        $topBuilders = User::has('buildProjects')->withCount('buildProjects')->orderByDesc('build_projects_count')->take(5)->get();

        return view('search-results', compact('users', 'showcases', 'forums', 'query', 'topBuilders'));
    }
}
