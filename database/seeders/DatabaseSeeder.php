<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $user1 = User::create([
            'name' => 'User One',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        $user2 = User::create([
            'name' => 'User Two',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        Post::create([
            'title' => 'Admin Post 1',
            'content' => 'This is the first post by admin.',
            'user_id' => $admin->id,
        ]);

        Post::create([
            'title' => 'Admin Post 2',
            'content' => 'Another post from admin.',
            'user_id' => $admin->id,
        ]);

        Post::create([
            'title' => 'User One Post',
            'content' => 'Post by User One.',
            'user_id' => $user1->id,
        ]);

        Post::create([
            'title' => 'User Two Post',
            'content' => 'Post by User Two.',
            'user_id' => $user2->id,
        ]);
    }
    }
}
