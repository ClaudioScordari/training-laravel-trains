@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Nome compagnia: {{ $train->company }}
</h1>

<section id="{{ 'treno-numero-' . $train->id }}">
    <ul>
        <li>
            company: {{ $train->company }}
        </li>

        <li>
            departure_station: {{ $train->departure_station }}
        </li>

        <li>
            arrival_station: {{ $train->arrival_station }}
        </li>

        <li>
            departure_time: {{ $train->departure_time }}
        </li>

        <li>
            arrival_time: {{ $train->arrival_time }}
        </li>

        <li>
            code: {{ $train->code }}
        </li>

        <li>
            num_carriages: {{ $train->num_carriages }}
        </li>

        <li>
            {{-- in_time: {{ $train->in_time }} --}}

            @if ($train->in_time == true)
                In arrivo
            @else
                In ritardo
            @endif
        </li>

        <li>
            {{-- deleted: {{ $train->deleted }} --}}

            @if ($train->deletd == true)
                Cancellato
            @else
                Non cancellato
            @endif
        </li>
    </ul>
</section>
@endsection