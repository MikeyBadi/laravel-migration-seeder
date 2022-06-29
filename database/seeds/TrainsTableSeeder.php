<?php

use App\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<100 ; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departures = $faker->city();
            $newTrain->arrivals = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{3}');
            $newTrain->coach = $faker->randomDigit();
            // dump($newTrain);
            $newTrain->save();
        };


    }
}
