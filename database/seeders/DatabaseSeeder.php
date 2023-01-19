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
        $d = now();
        foreach(Projects::all() as $p) {
            $p->update([
               "created_at" => $d,
               "updated_at" => $d
            ]);
        }
        $i = 0;
        foreach(Projects::orderBy("identifier", "DESC")->get() as $p) {
            $p->update([
               "created_at" => $d->subDays($i),
               "updated_at" => $d->subDays($i)
            ]);
            $i++;
        }
    }
}
