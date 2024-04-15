<?php

namespace App\Observers;

use App\Mail\InformationCapturedMail;
use App\Models\Person;
use Illuminate\Support\Facades\Mail;

class PersonObserver
{
    public function created(Person $person): void
    {
        Mail::to($person->email)->queue(new InformationCapturedMail($person));
    }

    public function deleting(Person $person): void
    {
        $person->interests()->detach();
    }
}
