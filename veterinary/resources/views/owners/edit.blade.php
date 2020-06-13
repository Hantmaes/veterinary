@extends('layouts/layout', ['title' => 'Edit'])

@section('content')
<div class="edit_pet">

    @if($owner->id)
        <form action="{{ route('owners.update', [$owner->id]) }}" method="post">
            @method('PUT')
    @else 
        <form action="{{ route('owners.store')}}" method="post">

    @endif
        @csrf
        <h1>Edit Owner</h1>
        <h3>{{$owner->id}}</h3>
        <label for="first_name">
            First Name<br>
            <input type="text" name="first_name" value="{{ old('first_name', $owner->first_name) }}">
        </label>
        <br>
        <br>
        <label for="surname">
           Surname <br>
            <input type="text" name="surname" value="{{ old('surname', $owner->surname) }}">
        </label>
        <br>
        <br>
        <label for="address">
            Address <br>
            <input type="text" name="address" value="{{ old('address', $owner->address) }}">
        </label>
        <br>
        <br>
        <label for="email">
            Email <br>
            <input type="text" name="email" value="{{ old('email', $owner->email) }}">
        </label>
        <br>
        <br>
        <label for="number">
            Number <br>
            <input type="text" name="number" value="{{ old('number', $owner->number) }}">
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