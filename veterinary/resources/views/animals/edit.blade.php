@extends('layouts/layout', ['title' => 'Edit'])

@section('content')
<div class="edit_pet">

    @if($animal->id)
        <form action="{{ route('animals.update', [$animal->id]) }}" method="post">
            @method('PUT')
    @else 
        <form action="{{ route('animal.store')}}" method="post">

    @endif
        @csrf
        <h1>Edit Pet </h1>
        <label for="name">
            Name<br>
            <input type="text" name="name" value="{{ old('name', $animal->name) }}">
        </label>
        <br>
        <br>
        <label for="breed">
            Breed <br>
            <input type="text" name="breed" value="{{ old('breed', $animal->breed) }}">
        </label>
        <br>
        <br>
        <label for="age">
            Age <br>
            <input type="text" name="age" value="{{ old('age', $animal->age) }}">
        </label>
        <br>
        <br>
        <label for="weight">
            Weight <br>
            <input type="text" name="weight" value="{{ old('weight', $animal->weight) }}">
        </label>
        <br>
        <br>
        @if (Session::has('success_message'))
    
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    
    @endif
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>

        <input class="button" type="submit" value="save">

    </form>

@endsection