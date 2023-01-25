@extends('layouts.admin')

@section('content')
<h3 class="text-center pt-3" >Creazione nuova Artwork</h3>
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
                <label for="description" class="form-label">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror " id="description" name="description" value="{{old('description')}}" aria-describedby="emailHelp">
                </textarea>
                {{-- @error('description')
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

            <div class="mb-3">
                <label for="year" class="form-label">Anno</label>
                <input type="number" class="form-control @error('year') is-invalid @enderror " id="year" name="year" value="{{old('year')}}" aria-describedby="emailHelp">

                {{-- @error('name')
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
