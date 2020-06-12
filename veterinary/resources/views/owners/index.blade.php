@extends('layouts.layout', ['title' => 'Owners'])

@section ('content')

<div class="container_owners">
@foreach ($owners as $owner)
    <div class="owners_div">
        <h2>{{ $owner->first_name . " " . $owner->surname }}</h2>  
        <a href="/owners/{{ $owner->id }}"><button>Details</button></a>
    </div>  
@endforeach
</div>

@endsection

{{--    <div class="owner_info">
        </div>
        <div class="img"><img src="/images/{{ $animal->photo}}" alt="Dogo"></div>
        <h3>Owner: <a href="/owners/{{$animal->owner->id}}"> {{$animal->owner->first_name." ".$animal->owner->surname}} </a></h3>
        
        --}}