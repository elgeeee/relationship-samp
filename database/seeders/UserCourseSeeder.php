<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::factory(5)->create();

        $users = User::factory(10)->create();

        foreach ($users as $user) {
            $user->courses()->attach(
                $courses->random(2)->pluck('id')
            );
        }
    }
}