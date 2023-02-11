@extends('layouts.app')

@section('content')
    <div class="my-images m-5 p-3">

        <div class="position-relative me-4">
          <a href="{{ route('create') }}">
            <button type="text" class="add-image-btn btn btn-outline-dark"><img class="btn btn-light" src="{{url('/img/plus.svg')}}" alt="add new image"> Add new image</button>
          </a>
        </div>

        <div class="card-container pt-5">
            @foreach ($images as $image)
              <div class="card" style="width: 18rem;">
                <div class="card-img">
                  <img src="{{ asset('storage') . '/' . $image->image }}" class="card-img" alt={{ $image->title }}>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $image->title }}</h5>
                  <p class="card-text">{{ $image->description }}</p>
                  <div class="card-btn">
                    <a href="{{ route('edit', ['id' => $image->id]) }}"><img src="{{ url('/img/edit.svg') }}" class="btn btn-light"></a>
                    <form action="{{ route('delete', ['id' => $image->id]) }}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-light"
                          onclick="return confirm('¿Estás seguro de que quieres eliminar esta imagem? {{ $image->title }}')">
                          <img src="{{ url('/img/delete.svg') }}" alt="Delete Image">
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection