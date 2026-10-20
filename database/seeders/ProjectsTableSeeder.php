<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();

            $new_project->name = $faker->sentence();
            $new_project->description = $faker->paragraph(3);
            $new_project->category = $faker->word();

            $new_project->save();
        }
    }
}
