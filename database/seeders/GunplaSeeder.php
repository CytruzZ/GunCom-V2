<?php

namespace Database\Seeders;

use App\Models\BuildProject;
use App\Models\Forum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GunplaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user dummy
        $user = User::create([
            'name' => 'Gunpla Master',
            'email' => 'master@gunpla.com',
            'password' => Hash::make('password123'),
        ]);

        // build proj dummy
        BuildProject::create([
            'user_id' => $user->id,
            'kit_name' => 'RX-78-2 Gundam',
            'grade' => 'MG',
            'percentage' => 75,
            'status' => 'ongoing',
        ]);

        BuildProject::create([
            'user_id' => $user->id,
            'kit_name' => 'Zaku II',
            'grade' => 'HG',
            'percentage' => 100,
            'status' => 'completed',
        ]);

        Forum::create([
            'user_id' => 1,
            'title' => 'Best Gundam Kits of 2024',
            'content' => 'What are your favorite Gundam kits released in 2024?',
        ]);
        
        Forum::create([
            'user_id' => 1,
            'title' => 'Tips for Painting Gundam Models',
            'content' => 'Share your best tips and techniques for painting Gundam models.',
        ]);
    }
}
