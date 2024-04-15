<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\PersonObserver;

#[ObservedBy([PersonObserver::class])]
class Person extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'people_interests_pivot');
    }
}
