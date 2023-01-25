@extends('layouts.admin')

@section('content')

    <h1 class="text-center text-white mb-5">
        ARTWORKS DB
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">artist ID</th>
                            <th scope="col">Museum ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Year</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($all_artworks as $artwork)
                            <tr class="text-white">
                                <td class="text-white">{{ $artwork->id }}</td>
                                <td class="text-white">{{ $artwork->artist_id }}</td>
                                <td class="text-white">{{ $artwork->museum_id }}</td>
                                <td class="text-white">{{ $artwork->name }}</td>
                                <td class="text-white">{{ $artwork->year }}</td>
                                <td>
                                    <a class="btn btn-success" href="">Vai</a>
                                    <a class="btn btn-warning" href="">Edita</a>
                                    <form action="" method="POST" class="d-inline"
                                        onsubmit="return confirm('Confermi l\'eliminazione di: {{ $artwork->name }}?')"
                                        class="d-inline" action="" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
