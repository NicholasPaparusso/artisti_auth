@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row w-100 h-100 d-flex justify-content-center mt-5">
            <div class="card" style="width: 30rem;">
                <img src="{{ $museum->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $museum->name }}</h5>
                    <p class="card-text">{{ $museum->address }}</p>
                    <p class="card-text">{{ $museum->nation }}</p>
                    <a href="{{ route('admin.museums.edit', $museum) }}" class="btn btn-warning fw-bold">EDIT</a>
                    <form onsubmit="return confirm('Confermi l\'eliminazione di {{ $museum->name }} ?')" class="d-inline"
                        method="POST" action="{{ route('admin.museums.destroy', $museum) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger fw-bold" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
