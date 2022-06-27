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
        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->orario_partenza =  $faker->time();
            $new_train->orario_arrivo =  $faker->time();
            $new_train->codice_treno = $faker->numberBetween(1000,9999);
            $new_train->codice_treno = $faker->numberBetween(1,10);
            $new_train->in_orario = $faker->boolean();
            $new_train->is_cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
