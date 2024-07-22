@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Modifica
</h1>

<section id="create-train">
    <form action="{{ route('trains.update', $train->id); }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="company">Inserisci il nome della compagnia</label>
            <input value="{{ $train->company }}" type="text" name="company" id="company" placeholder="Nome compagnia..." required>
        </div>

        <div>
            <label for="departure_station">Inserisci il nome della stazione di partenza</label>
            <input value="{{ $train->departure_station }}" type="text" name="departure_station" id="departure_station" placeholder="Nome stazione di partenza..." required>
        </div>

        <div>
            <label for="arrival_station">Inserisci il nome della stazione di arrivo</label>
            <input value="{{ $train->arrival_station }}" type="text" name="arrival_station" id="arrival_station" placeholder="Nome stazione di arrivo..." required>
        </div>

        <div>
            <label for="departure_time">Inserisci l'orario di partenza</label>
            <input value="{{ $train->departure_time }}" type="time" name="departure_time" id="departure_time" placeholder="Orario di partenza..." required>
        </div>

        <div>
            <label for="arrival_time">Inserisci l'orario di arrivo</label>
            <input value="{{ $train->arrival_time }}" type="time" name="arrival_time" id="arrival_time" placeholder="Orario di arrivo..." required>
        </div>

        <div>
            <label for="code">Inserisci il codice del treno</label>
            <input value="{{ $train->code }}" type="text" name="code" id="code" placeholder="Inserisci il codice del treno..." required>
        </div>

        <div>
            <label for="num_carriages">Inserisci il numero delle carrozze</label>
            <input value="{{ $train->num_carriages }}" type="number" min="1" max="9" name="num_carriages" id="num_carriages">
        </div>

        <div>
            <label for="num_carriages">Inserisci se il treno è in orario</label>
            <select value="{{ $train->in_time }}" name="in_time" id="in_time">
                <option value="1">In orario</option>
                <option value="0">In ritardo</option>
            </select>
        </div>

        <div>
            <label for="num_carriages">Inserisci se il treno è stato cancellato</label>
            <select value="{{ $train->deleted }}" name="deleted" id="deleted">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>

        <div>
            <button>
                Modifica
            </button>
        </div>
    </form>
</section>
@endsection