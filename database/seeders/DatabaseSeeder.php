<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory()->count(5)->create();

        Job::factory(10)->create()->each(function ($job) use ($categories) {
            $job->category_ids = $categories->random(2)->pluck('id')->toArray(); // Assign 2 random categories
            $job->save();
        });
    }
}
