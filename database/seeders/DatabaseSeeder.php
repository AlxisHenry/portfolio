<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $i = 1;
        foreach(Projects::all() as $project) {
            $project->update([
                "created_at" => now()->addDays($i),
                "updated_at" => now()->addDays($i)
            ]);
            $i++;
        }
    }
}
