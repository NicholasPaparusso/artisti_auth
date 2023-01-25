@extends('layouts.admin')

@section('content')
<h3 class="text-center pt-3" >Modifica di {{'admin.'}}</h3>
    <div class="container d-flex justify-content-center py-5">
        <form action="{{route('admin.artworks.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" value="{{old('name')}}" aria-describedby="emailHelp">

                {{-- @error('name')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror --}}

            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control @error('bio') is-invalid @enderror " id="bio" name="bio" value="{{old('bio')}}" aria-describedby="emailHelp">
                </textarea>
                {{-- @error('bio')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror --}}

            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input
                 type="file"
                 class="form-control @error('image') is-invalid @enderror "
                 id="image"
                name="image"
                onchange="showImage(event)"
                value="{{old('image')}}" aria-describedby="emailHelp">

                {{-- @error('image')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror --}}

            </div>

            <div>
                <img width="200" id="show-image" src="" alt="">
            </div>

            <button type="submit" class="btn btn-success" > Invio</button>
        </form>
    </div>

    <script>

        function showImage(event){
                const technologyImage = document.getElementById('show-image');
                technologyImage.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>

@endsection
