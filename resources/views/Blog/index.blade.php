@extends('Layouts.Main')

@section('content')
<div class="card-header">
  <h3 class="card-title">Blog Lists</h3>
</div>
<div class="card-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>Task</th>
        <th>Progress</th>
        <th style="width: 40px">Label</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($blogs as $blog)
      <tr>
        <td> {{ $loop->iteration }} </td>
        <td> {{ $blog->name }} </td>
        <td> {{ $blog->desc }} </td>
        <td><span class="badge bg-danger">55%</span></td>
      </tr>
      @empty
      <tr>
        <td>2.</td>
        <td>Clean database</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" style="width: 70%"></div>
          </div>
        </td>
        <td><span class="badge bg-warning">70%</span></td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection