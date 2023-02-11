@extends('layouts.app')

@section('content')

  <form method="post" action="{{route('update', $image->id)}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="px-5 m-5">
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="title" value="{{$image->title}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <img id="uploadPreview" class="input-select" src="{{ asset('storage') . '/' . $image->image }}" width=90 alt="">
        <input id="uploadImage" type="file" name="image" value="" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onchange="previewImage();">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="description" value="{{$image->description}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="px-5 mx-5">
      <button type="submit" class="btn btn-outline-dark">Edit</button>
      <button type="submit" class="btn btn-outline-dark ml-3">Cancel</button>
    </div>
  </form>

  <script>
    function previewImage() {        
        var reader = new FileReader();         
        reader.readAsDataURL(document.getElementById('uploadImage').files[0]);         
        reader.onload = function (e) {             
            document.getElementById('uploadPreview').src = e.target.result;         
        };     
    }
  </script>

@endsection