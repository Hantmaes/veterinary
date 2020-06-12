@extends('layouts.layout', ['title' => 'Search Owners'])

@section ('content')

<div class="container_search">
@foreach ($owners as $owner)
    <div class="search_div">
        
        <form action="{{ route('owners.search') }}" method="get">
            <label for="">
                first Name:<br>
                <input type="text" name="first_name" value="{{ old('first_name', $owner->first_name) }}">
            </label>
        
       
    </div>  
@endforeach
</div>

@endsection