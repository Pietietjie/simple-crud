<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        Language::firstOrCreate([ 'label' => 'Afrikaans' ]);
        Language::firstOrCreate([ 'label' => 'English' ]);
        Language::firstOrCreate([ 'label' => 'isiNdebele' ]);
        Language::firstOrCreate([ 'label' => 'isiXhosa' ]);
        Language::firstOrCreate([ 'label' => 'isiZulu' ]);
        Language::firstOrCreate([ 'label' => 'Sesotho' ]);
        Language::firstOrCreate([ 'label' => 'Sesotho sa Leboa (Sepedi)' ]);
        Language::firstOrCreate([ 'label' => 'Setswana' ]);
        Language::firstOrCreate([ 'label' => 'siSwati' ]);
        Language::firstOrCreate([ 'label' => 'Tshivenda' ]);
        Language::firstOrCreate([ 'label' => 'Xitsonga' ]);
    }
}
