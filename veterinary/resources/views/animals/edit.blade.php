@extends('layouts/layout', ['title' => 'Edit'])

@section('content')
<div class="edit_pet">
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

    @if($animal->id)
        <form action="{{ route('animals.update', [$animal->id]) }}" method="post">
            @method('PUT')
    @else 
        <form action="{{ route('animal.store')}}" method="post">

    @endif
        @csrf

        <label for="title">
            Name:<br>
            <input type="text" name="name" value="{{ old('name', $animal->name) }}">
        </label>
        <br>
        <br>
        <input type="submit" value="save">

    </form>

@endsection