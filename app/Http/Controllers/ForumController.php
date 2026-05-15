<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Showcase;
use App\Models\User;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        $query = Forum::with('user')->withCount('comments');

        if ($request->has('category')) {
            $query->where('category', $request->query('category'));
        }

        $forums = $query->latest()->paginate(10);
        $topShowcases = Showcase::with('user')->orderByDesc('likes')->take(5)->get();
        $topBuilders = User::has('buildProjects')->withCount('buildProjects')->orderByDesc('build_projects_count')->take(5)->get();
        
        $currentCategory = $request->query('category');
        return view('index', compact('forums', 'topShowcases', 'topBuilders', 'currentCategory'));
    }

    public function show($id)
    {
        $forum = Forum::with(['user', 'comments.user'])->findOrFail($id);
        $topShowcases = Showcase::with('user')->orderByDesc('likes')->take(5)->get();
        $topBuilders = User::has('buildProjects')->withCount('buildProjects')->orderByDesc('build_projects_count')->take(5)->get();

        return view('forum-show', compact('forum', 'topShowcases', 'topBuilders'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        $forum = Forum::findOrFail($id);

        $forum->comments()->create([
            'user_id' => auth()->id(),
            'reply' => $request->reply,
        ]);

        if ($forum->user_id != auth()->id()) {
            $forum->user->notify(new \App\Notifications\NewCommentNotification(
                auth()->user(),
                'meninggalkan komentar di forum Anda: "' . $forum->title . '"',
                route('forums.show', $forum->id)
            ));
        }

        return redirect()->back()->with('success', 'Comment posted successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|in:Q&A,Build & Custom,Kits',
        ]);

        Forum::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Forum created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|in:Q&A,Build & Custom,Kits',
        ]);

        $forum = Forum::findOrFail($id);

        if ($forum->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $forum->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Forum updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $forum = Forum::findOrFail($id);

        if ($forum->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $showUrl = route('forums.show', $id);
        $forum->delete();

        if ($request->has('redirect_to') && !str_contains($request->redirect_to, $showUrl)) {
            return redirect($request->redirect_to)->with('success', 'Forum deleted successfully!');
        }

        if (str_contains(url()->previous(), $showUrl)) {
            return redirect()->route('index')->with('success', 'Forum deleted successfully!');
        }

        return redirect()->back()->with('success', 'Forum deleted successfully!');
    }
}
