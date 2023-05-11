<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++){
            $table = new Train();
            $table->company = $faker->company();
            $table->departure_station = $faker->city();
            $table->arrival_station = $faker->city();
            $table->departure_time = $faker->dateTimeBetween('-2 days','+2 days');
            $table->arrivale_time = $faker->dateTimeBetween('-2 days','+2 days');
            $table->train_code = $faker->bothify('###???');
            $table->coaches = $faker->randomDigit();
            $table->on_time = $faker->boolean(70);
            $table->cancelled = $faker->boolean();
            $table->save();
        }
    }
}
