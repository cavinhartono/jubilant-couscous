@extends('Layouts.Main')

@section('content')
<div class="card w-75 mb-3">
  <div class="card-body">
    <h5 class="card-title">{{ $blog->title }}</h5>
    <p class="card-text">{!! $blog->desc !!}</p>
    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('blog.index') }}" class="btn btn-light">Kembali</a>
  </div>
</div>
@endsection