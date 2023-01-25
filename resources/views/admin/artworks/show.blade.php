@extends('layouts.admin')

@section('content')
<div class="container d-flex justify-content-center py-5">
    <div class="card py-4 my-5" style="width: 18rem;">
        <div class="title d-flex mx-3">

            <h5 class="card-title me-4"> ID: {{$artwork->id}}</h5>
            <h5 class="card-title">{{$artwork->name}}</h5>
        </div>
        @if (is_null($artwork->image))
        <img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" class="card-img-top" alt="">
        @endif
        <img src="..." class="card-img-top" alt="">

        <div class="card-body">

          <p class="card-text">{{$artwork->bio}}</p>
          <a href="{{route('admin.artworks.edit', $artwork)}}" class="btn btn-warning">edit</a>
        </div>
      </div>
</div>
@endsection
