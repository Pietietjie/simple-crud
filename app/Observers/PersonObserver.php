<?php

namespace App\Observers;

use App\Models\Person;

class PersonObserver
{
    public function created(Person $person): void
    {
    }

    public function updated(Person $person): void
    {
    }

    public function deleting(Person $person): void
    {
        $person->interests()->detach();
    }

    public function restored(Person $person): void
    {
    }

    public function forceDeleted(Person $person): void
    {
    }
}
