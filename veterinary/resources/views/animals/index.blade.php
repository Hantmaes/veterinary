@extends('layouts.layout', ['title' => 'Pets'])

@section ('content')

<div class="container_pets">
@foreach ($animals as $animal)
    <div class="pets_div">
        <h2>{{ $animal->name }}</h2>
        <div class="pet_info">
        </div>
        <div class="img"><img src="/images/{{ $animal->photo}}" alt="Dogo"></div>

        <h3>Owner: <a href="/owners/{{$animal->owner->id}}"> {{$animal->owner->first_name." ".$animal->owner->surname}} </a></h3>

        <a href="/animals/{{ $animal->id }}"><button>Details</button></a>
    </div>  
@endforeach
</div>

@endsection