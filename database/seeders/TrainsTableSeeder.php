<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $agencies = [
            'Trenitalia',
            'SNCF (Société Nationale des Chemins de Fer Français)',
            'Deutsche Bahn',
            'Amtrak',
            'JR East (East Japan Railway Company)',
            'Renfe Operadora',
            'China Railway Corporation',
            'Indian Railways',
            'Russian Railways',
            'Canadian National Railway'
        ];

        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->randomElement($agencies);
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = implode('', [$faker->randomLetter(), $faker->randomLetter(), $faker->randomNumber(3)]);
            $new_train->number_of_carriages = $faker->randomDigitNotNull();
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->slug = Str::slug(implode(' ', [$new_train->departure_station, $new_train->arrival_station,  $new_train->train_code]), '-');

            //! PER FARE UN CONTROLLO  dump($new_train);  + nel terminale: php artisan db:seed --class=TrainsTableSeeder
            // dump($new_train);

            //* per inviarli al database $new_train->save(); + nel terminale: php artisan db:seed --class=TrainsTableSeeder
            $new_train->save();
        }
    }
}
