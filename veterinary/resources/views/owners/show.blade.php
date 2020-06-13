@extends('layouts.layout', ['title' => 'Pets'])

@section ('content')

<div class="container_pet">
<div class=" owner_div">
        <h2> {{$owner->first_name." ".$owner->surname}} </h2>
        <div class="owner_info ">
        <p><strong>Address:</strong> {{ $owner->address }}</p>
        <p><strong>Email:</strong> {{ $owner->email }}</p>
        <p><strong>Number:</strong> {{ $owner->number }}</p>
        </div>

        <h3>{{$owner->first_name}}'s pets:</h3>
        @foreach ($animals as $a)
        <div>
        <a href="/animals/{{$a->id}}"><p class="pet_name">{{ $a->name }}</p></a>
        </div>
    @endforeach

        <a href="/owners/{{ $owner->id }}/edit"><button>Edit</button></a>
    </div>  
</div>

@endsection