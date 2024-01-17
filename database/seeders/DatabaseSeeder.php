<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Profile::factory(5)->create();
        // Post::factory(5)->create();
        // Comment::factory(10)->create();
        // Student::factory(5)->create();
        // Course::factory(5)->create();
        StudentCourse::factory(10)->create();
    }
}
