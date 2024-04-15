<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrUpdatePersonRequest;
use App\Models\Interest;
use App\Models\Language;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::with(['language', 'interests'])
            ->paginate();

        return view('people.index', [
            'people' => $people
        ]);
    }

    public function create()
    {
        $languages = Language::all();
        $interests = Interest::all();

        return view('people.create', [
            'languages' => $languages,
            'interests' => $interests,
        ]);
    }

    public function store(StoreOrUpdatePersonRequest $request)
    {
        $person = new Person();

        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->sa_id_num = $request->sa_id_num;
        $person->mobile_number = $request->mobile_number;
        $person->email = $request->email;
        $person->language_id = $request->language;
        $person->save();

        $person->interests()->attach($request->interests);

        return redirect()->route('people.index');
    }

    public function edit(Person $person)
    {
        $languages = Language::all();
        $interests = Interest::all();

        return view('people.edit', [
            'person' => $person,
            'languages' => $languages,
            'interests' => $interests,
        ]);
    }

    public function update(StoreOrUpdatePersonRequest $request, Person $person)
    {
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->sa_id_num = $request->sa_id_num;
        $person->mobile_number = $request->mobile_number;
        $person->email = $request->email;
        $person->language_id = $request->language;
        $person->save();

        $person->interests()->sync($request->interests);

        return redirect()->route('people.index');
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('people.index');
    }
}
