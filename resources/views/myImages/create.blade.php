<form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
  @csrf
  <x-form />
</form>