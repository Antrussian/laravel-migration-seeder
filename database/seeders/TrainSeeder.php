<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departing_station = $faker->city();
            $newTrain->arriving_station = $faker->city();
            $newTrain->arriving_station = $faker->city();
        }
    }
}
