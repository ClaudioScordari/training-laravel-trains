@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Nome compagnia: {{ $train->company }}
</h1>

<section id="{{ 'treno-numero-' . $train->id }}">
    <ul>
        <li>
            {{ $train->company }}
        </li>

        <li>
            {{ $train->departure_station }}
        </li>

        <li>
            {{ $train->arrival_station }}
        </li>
    </ul>
</section>
@endsection