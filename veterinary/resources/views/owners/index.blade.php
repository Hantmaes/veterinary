@extends('layouts.layout', ['title' => 'Owners'])

@section ('content')

<div class="container_owners">
@foreach ($owners as $owner)
    <div class="owners_div">
        <h2>{{ $owner->first_name . " " . $owner->surname . " - ". $owner->id}}</h2>  
        <a href="/owners/{{ $owner->id }}"><button>Details</button></a>
    </div>  
@endforeach
</div>

@endsection
