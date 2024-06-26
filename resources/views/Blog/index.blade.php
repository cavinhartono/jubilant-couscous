@extends('Layouts.Main')

@section('content')
<div class="card-header">
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  @if (session('update'))
  <div class="alert alert-warning" role="alert">
    {{ session('update') }}
  </div>
  @endif
  @if (session('destroy'))
  <div class="alert alert-danger" role="alert">
    {{ session('destroy') }}
  </div>
  @endif
  <h3 class="card-title">Blog Lists</h3>
</div>
<div class="card-body">
  <a href="{{ route('blog.create') }}" class="btn btn-primary">Tambah</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th style="width: 100px">Genre</th>
        <th>Judul</th>
        <th style="width: 196px">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($blogs as $blog)
      <tr>
        <td> {{ $loop->iteration }} </td>
        <td style="text-transform: capitalize;">
          @switch($blog->category_id)
          @case(1)
          Olahraga
          @break
          @case(2)
          Kesehatan
          @break
          @case(3)
          Teknologi
          @break

          @default
          Tidak Memiliki Genre
          @endswitch
        </td>
        <td> {{ $blog->title }} </td>
        <td>
          <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary">Detail</a>
          <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
          <form method="POST" action="{{ route('blog.destroy', $blog->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection