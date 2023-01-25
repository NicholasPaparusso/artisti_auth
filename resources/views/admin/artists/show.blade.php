@extends('layouts.admin')

@section('content')
    <p class="text-center py-5">
        Info su:
    </p>
    <h4 class="text-center fw-bolder">
        {{ $artist->name }}
    </h4>
    {{--     <div class="text-white text-center">
        <h5>Elenco opere</h5>
        <ul>
            @forelse ($artist->artworks as $artwork)
                <li>{{ $artwork->name }}</li>
            @empty
                <li>Nessun risultato trovato</li>
            @endforelse
        </ul>
    </div> --}}


    <div class="d-flex justify-content-center py-5">
        <a class="btn btn-warning" href="{{ route('admin.artists.edit', $artist) }}">MODIFICA</a>

        <form action="{{ route('admin.artists.destroy', $artist) }}" method="POST"
            onsubmit="return confirm('confermi l\'eliminazione?')">
            @csrf
            @method('DELETE')

            <button title="delete" type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
            </button>
        </form>
    </div>
@endsection
