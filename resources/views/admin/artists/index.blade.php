@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-info my-4" href="{{ route('admin.artists.create') }}">AGGIUNGI ARTISTA</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <th scope="row">{{ $artist->id }}</th>
                        <td>{{ $artist->name }}</td>
                        <td class="d-flex">

                            <a class="btn btn-primary" href="{{ route('admin.artists.show', $artist) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a class="btn btn-warning mx-2" href="{{ route('admin.artists.edit', $artist) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('admin.artists.destroy', $artist) }}" method="POST"
                                onsubmit="return confirm('confermi l\'eliminazione?')">
                                @csrf
                                @method('DELETE')

                                <button title="delete" type="submit" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center py-5">
            {{ $artists->links() }}
        </div>
    </div>
@endsection
