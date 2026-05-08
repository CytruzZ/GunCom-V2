<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'nullable|numeric|digits_between:10,15',
            'instagram' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:300',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $user = auth()->user();
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'instagram' => $request->instagram,
            'bio' => $request->bio,
        ];

        if ($request->input('remove_avatar') == '1') {
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $data['profile_picture'] = null;
        } elseif ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => [
                'required',
                'min:8',
                'regex:/[0-9]/',
                'regex:/[^a-zA-Z0-9]/',
                'confirmed'
            ],
        ], [
            'new_password.regex' => 'The new password must contain at least one number and one special character.',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match our records.']);
        }

        if (Hash::check($request->new_password, $user->password)) {
            return back()->withErrors(['new_password' => 'The new password cannot be the same as your current password.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password updated successfully.');
    }
}
