<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildProject;

class BuildController extends Controller
{
    public function index()
    {
        //Ambil semua build project dari database
        $projects = BuildProject::all();

        //Kirim data ke view
        return view('index', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kit_name' => 'required|string|max:255',
            'grade' => 'required|string|max:50',
            'percentage' => 'required|integer|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        $images = [];
        if ($request->hasFile('image')) {
            $images[] = $request->file('image')->store('builds', 'public');
        }

        $status = $validated['percentage'] == 100 ? 'completed' : 'ongoing';

        BuildProject::create([
            'user_id' => auth()->id(),
            'kit_name' => $validated['kit_name'],
            'grade' => $validated['grade'],
            'percentage' => $validated['percentage'],
            'status' => $status,
            'image' => empty($images) ? null : $images,
        ]);

        return redirect()->route('my-profile.buildlog')->with('success', 'Build project added successfully!');
    }

    public function update(Request $request, $id)
    {
        $project = BuildProject::where('user_id', auth()->id())->findOrFail($id);

        $validated = $request->validate([
            'percentage' => 'required|integer|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        $status = $validated['percentage'] == 100 ? 'completed' : 'ongoing';

        $data = [
            'percentage' => $validated['percentage'],
            'status' => $status,
        ];

        if ($request->hasFile('image')) {
            $images = [];
            if (is_array($project->image)) {
                $images = $project->image;
            } elseif (is_string($project->image) && !empty($project->image)) {
                $decoded = json_decode($project->image, true);
                if (is_array($decoded)) {
                    $images = $decoded;
                } else {
                    $images[] = $project->image;
                }
            }

            $images[] = $request->file('image')->store('builds', 'public');
            $data['image'] = $images;
        }

        $project->update($data);

        return redirect()->route('my-profile.buildlog')->with('success', 'Build progress updated successfully!');
    }

    public function destroy($id)
    {
        $project = BuildProject::where('user_id', auth()->id())->findOrFail($id);
        $project->delete();

        return redirect()->route('my-profile.buildlog')->with('success', 'Build project deleted successfully!');
    }
}
