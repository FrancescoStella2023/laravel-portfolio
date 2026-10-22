<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 3; $i++) {
            $new_technology = new Technology();

            $new_technology->name = $faker->word();
            $new_technology->color = $faker->hexColor();


            $new_technology->save();
        }
    }
}
