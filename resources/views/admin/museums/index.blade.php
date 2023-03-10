@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1>Museums</h1>
        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('admin.museums.create') }}">Add a new museum</a>
        </div>
    </div>

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><a href="">ID</a></th>
                    <th scope="col"><a href="">Name</a></th>
                    <th scope="col"><a href="">Nation</a></th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($museums as $museum)
                    <tr>
                        <td>{{ $museum->id }}</td>
                        <td>{{ $museum->name }}</td>
                        <td>{{ $museum->nation }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.museums.show', $museum) }}" title="show"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning " href="{{ route('admin.museums.edit', $museum) }}" title="edit"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form class="d-inline"
                                onsubmit="return confirm('Confermi l\'eliminazione di {{ $museum->name }} ?')"
                                class="d-inline" method="POST" action="{{ route('admin.museums.destroy', $museum) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger fw-bold" type="submit"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h3>No museums found.</h3>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $museums->links() }}
        </div>

    </div>
@endsection
