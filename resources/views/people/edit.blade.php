@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('people.update', ['person' => $person->id]) }}">
        @csrf
        <div class="m-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name', $person->first_name)}}">
            @error('first_name')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{old('last_name', $person->last_name)}}">
            @error('last_name')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="sa_id_num" class="form-label">South African ID</label>
            <input type="text" class="form-control @error('sa_id_num') is-invalid @enderror" name="sa_id_num" value="{{old('sa_id_num', $person->sa_id_num)}}">
            @error('sa_id_num')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="mobile_number" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{old('mobile_number', $person->sa_id_num)}}">
            @error('mobile_number')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $person->email)}}">
            @error('email')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="text" class="form-label">Language</label>
            <select class="form-select @error('language') is-invalid @enderror" name="language">
                <option>Language</option>
                @foreach ($languages as $language)
                    <option value="{{ $language->id }}" @if(old('language', $person->language->id) == $language->id) selected @endif>{{ $language->label }}</option>
                @endforeach
            </select>
            @error('language')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3">
            <label for="text" class="form-label">Interests</label>
            <select class="form-select @error('interests') is-invalid @enderror" multiple data-bs-toggle="tooltip" data-bs-html="true" title="Select multiple Interest by holding <b>Ctrl</b>" name="interests[]">
                @foreach ($interests as $interest)
                    <option value="{{ $interest->id }}" @if(in_array($interest->id, old('interests', $person->interests->toArray() ?? []))) selected @endif>{{ $interest->label }}</option>
                @endforeach
            </select>
            @error('interests')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="m-3 row">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('people.index') }}" class="btn btn-secondary mx-3">Back</a>
        </div>
    </form>
@endsection
