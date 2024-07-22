@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Treni
</h1>

<section id="trains">
    <div>
        <a class="btn btn-success" href="{{ route('trains.create') }}">Crea un treno</a>
    </div>

    <ul>
        @foreach ($trains as $train)
            <li>
                <h2>
                    <span style="color: blue">{{ $train->id }}</span> - Compagnia: {{ $train->company }}
                </h2>

                <div>
                    <a class="btn btn-primary" href="{{ route('trains.show', $train->id); }}">Vai al singolo treno</a>

                    <a class="btn btn-warning" href="{{ route('trains.edit', $train->id); }}">Modifica questo treno</a>

                    <form class="d-inline-block" onsubmit="return confirm('Sei sicuro?');" action="{{ route('trains.destroy', $train->id); }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Elimina questo treno
                        </button>
                    </form>
                </div>

                <hr>
            </li>
        @endforeach
    </ul>
</section>
@endsection