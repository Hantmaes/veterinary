@extends('layouts.layout', [
    'title' => 'List of ownerss'
])  {{--se reemplaza el contenido--}}



@section('content')
    
<h1>Owners Index</h1>

    @foreach($owners as $o)

    {{--<a href="{{ route('publishers.edit'), $p->id }}">Edit this publisher</a>--}}

        <div>
            <h2>{{ $o->first_name }}</h2>
            <ul>
                @foreach($o->owners as $owner)
                    <li>{{$owner->firt_name}}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
            {{--
            <ul>
                @foreach($p->books as $b)
                    <li>{{$o->firt_name}}</li>
                @endforeach
            </ul>
    
            --}}

            {{--
            @endcomponent


            <a href="publishers/{{ $p->id }}">Read more...</a>
        </div>
--}}
{{--
    @endforeach

    @component('publishers.unordered-list', [
        'what' => 'whatever'
    ])
        ANYTHING ELSE, WRAPPED IN THE COMPONENT
    @endcomponent

    --}}

@endsection

{{----}}