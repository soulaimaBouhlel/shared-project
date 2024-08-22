<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Job;
use App\Models\Tag;
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
        $jobs = Job::factory()->count(5)->create();
        $tags = Tag::factory()->count(10)->create();
        foreach ($jobs as $job){
            $job->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray(),
                ['weight' => rand(1, 10)]
            );
        }


    }
}
