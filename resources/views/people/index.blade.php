@extends('layouts.app')

@section('content')
    <div class="row flex-row-reverse">
        <a href="{{ route('people.create') }}" class="btn btn-success m-1 mx-4">Add New Person</a>
    </div>
    <table class="table m-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">South African ID</th>
                <th scope="col">Mobile number</th>
                <th scope="col">Email</th>
                <th scope="col">Language</th>
                <th scope="col">Interests</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->sa_id_num }}</td>
                    <td>{{ $person->mobile_number }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->language->label }}</td>
                    <td>{{ implode(', ', $person->interests->pluck('label')->toArray()) }}</td>
                    <td>
                        <a href="{{ route('people.edit', ['person' => $person->id]) }}" class="btn btn-success btn-sm m-1">Edit</a>
                        <form method="post" action="{{ route('people.destroy', ['person' => $person->id])}}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm m-1">Delete</button>
                        </form
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $people->links() }}
@endsection
