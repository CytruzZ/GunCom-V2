<?php

namespace App\Http\Controllers;

use App\Models\Showcase;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index()
    {
        $showcases = Showcase::with(['user', 'comments.user'])->latest()->get();
        $topShowcases = Showcase::with('user')->where('likes', '>', 0)->orderByDesc('likes')->take(5)->get();
        $topBuilders = \App\Models\User::has('buildProjects')->withCount('buildProjects')->orderByDesc('build_projects_count')->take(5)->get();
        
        return view('index-showcase', compact('showcases', 'topShowcases', 'topBuilders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|file|max:10240|mimes:jpeg,png,gif,webp',
            'description' => 'nullable|string|max:1000',
        ]);

        $imagePath = $request->file('image')->store('showcases', 'public');

        Showcase::create([
            'user_id' => auth()->id(),
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Gambar berhasil diposting!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'nullable|string|max:1000',
        ]);

        $showcase = Showcase::findOrFail($id);
        
        // Ensure the user owns this showcase
        if ($showcase->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $showcase->update([
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Deskripsi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $showcase = Showcase::findOrFail($id);

        // Ensure the user owns this showcase
        if ($showcase->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Delete image from storage
        if ($showcase->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($showcase->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($showcase->image);
        }

        $showcase->delete();

        return redirect()->back()->with('success', 'Postingan berhasil dihapus!');
    }

    public function toggleLike($id)
    {
        $showcase = Showcase::findOrFail($id);
        $userId = auth()->id();

        $like = \App\Models\ShowcaseLike::where('user_id', $userId)->where('showcase_id', $showcase->id)->first();

        $isLiked = false;
        if ($like) {
            // Unlike
            $like->delete();
            $showcase->decrement('likes');
        } else {
            // Like
            \App\Models\ShowcaseLike::create([
                'user_id' => $userId,
                'showcase_id' => $showcase->id,
            ]);
            $showcase->increment('likes');
            $isLiked = true;

            // Notification
            if ($showcase->user_id != $userId) {
                $showcase->user->notify(new \App\Notifications\NewLikeNotification(
                    auth()->user(),
                    'menyukai showcase Anda.',
                    route('showcases.index') . '?open_modal=' . $showcase->id
                ));
            }
        }

        if (request()->wantsJson() || request()->ajax()) {
            return response()->json([
                'status' => 'success',
                'id' => $showcase->id,
                'likes_count' => $showcase->likes,
                'is_liked' => $isLiked
            ]);
        }

        return redirect()->back()->with('open_modal', $showcase->id);
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required|string|max:1000',
        ]);

        $showcase = Showcase::findOrFail($id);

        \App\Models\ShowcaseComment::create([
            'showcase_id' => $showcase->id,
            'user_id' => auth()->id(),
            'reply' => $request->reply,
        ]);

        // Notification
        if ($showcase->user_id != auth()->id()) {
            $showcase->user->notify(new \App\Notifications\NewCommentNotification(
                auth()->user(),
                'mengomentari showcase Anda.',
                route('showcases.index') . '?open_modal=' . $showcase->id
            ));
        }

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!')->with('open_modal', $showcase->id);
    }
}
