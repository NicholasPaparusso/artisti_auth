@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <h2 class="fw-bold text-center">AGGIUNGI NUOVO MUSEO</h2>
        <div class="row w-75 m-auto pt-5">
            <form action="{{ route('admin.museums.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                        placeholder="Inserisci nome museo">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Indirizzo</label>
                    <input type="text" value="{{ old('address') }}" name="address" class="form-control" id="address"
                        placeholder="Inserisci indirizzo">
                </div>
                <div class="mb-3">
                    <label for="nation" class="form-label">Nazione</label>
                    <input type="text" value="{{ old('nation') }}" name="nation" class="form-control" id="nation"
                        placeholder="Inserisci indirizzo">
                </div>

                <div class="d-flex justify-content-center pt-4">
                    <a href="{{ route('admin.museums.index') }}" class="btn btn-danger me-3">ANNULLA</a>
                    <button type="submit" class="btn btn-success">AGGIUNGI</button>
                </div>

            </form>
        </div>
    </div>
@endsection
