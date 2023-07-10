<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $stacksData = config('store');


        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->domainName();
            $newProject->description = $faker->text();
            $newProject->image = "https://picsum.photos/200/200";
            $newProject->link = $faker->url();

            $stacks = "";
            for ($j = 0; $j < 4; $j++) {
                $stack = $stacksData[rand(0, count($stacksData) - 1)];
                if (!str_contains($stacks, $stack)) {
                    $stacks .= $stack . ' ';
                }
            }

            $newProject->stack = $stacks;
            $newProject->save();
        }
    }
}
