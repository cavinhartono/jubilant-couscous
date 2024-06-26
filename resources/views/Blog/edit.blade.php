@extends('Layouts.Main')

@section('content')
<div class="card-header">
  <h3 class="card-title">
    Edit Posting
  </h3>
</div>
<div class="card-body">
  <form action="{{ route('blog.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="category" class="form-label">Category<sup class="text-red">*</sup></label>
      <select class="form-control" name="category_id" id="category">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" style="text-transform: capitalize;" {{ $blog->category_id == $category->id ? 'selected' : "" }}>{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Title<sup class="text-red">*</sup></label>
      <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea class="form-control" name="desc" id="desc" rows="3">{{ $blog->desc }}</textarea>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Edit</button>
      <a href="{{ route('blog.index') }}" class="ml-2 btn btn-light">Kembali</a>
    </div>
  </form>
</div>
@endsection