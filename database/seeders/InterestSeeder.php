<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    public function run(): void
    {
        Interest::firstOrCreate([ 'label' => 'Acting' ]);
        Interest::firstOrCreate([ 'label' => 'Calligraphy' ]);
        Interest::firstOrCreate([ 'label' => 'Drawing' ]);
        Interest::firstOrCreate([ 'label' => 'Origami' ]);
    }
}
