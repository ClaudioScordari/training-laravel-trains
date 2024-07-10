<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // svuotare tutte le righe
        Train::truncate();

        // quante istanze vuoi creare?
        for ($i=0; $i < 10; $i++) { 
            
            // creazione di tot volte dell'istanza
            $train = new Train();
            $train->company = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->code = fake()->regexify('[A-Z0-9]{7}');
            $train->num_carriages = rand(2, 6);
            $train->in_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            $train->save();
        }
    }
}
