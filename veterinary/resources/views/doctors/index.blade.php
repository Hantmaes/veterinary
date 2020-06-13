@extends('layouts.layout', ['title' => 'Owners'])

@section ('content')

<div class="container_owners">
@foreach ($doctors as $doctor)
    <div class="doctor_div">
        <h2>{{ $doctor->name}}</h2>  
        <p><strong>Specialized:</strong>
            {{$doctor->spieces}}
        </p>
    </div>
@endforeach
</div>

@endsection
