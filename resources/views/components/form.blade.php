@extends('layouts.app')

@section('content')

  <div class="px-5 m-5">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="image title" required autocomplete="title" autofocus>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" name="description" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" required autocomplete="description" autofocus>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input name="image" id="image" class="form-control input-select" type="file" required
        autocomplete="image" autofocus>
      </div>
    
  </div>
  <div class="px-5 mx-5">
    <button type="submit" class="btn btn-outline-dark">Create</button>
    <button type="submit" class="btn btn-outline-dark ml-3" onclick="window.location='{{ route('home') }}';return false;">Cancel</button>
  </div>
@endsection