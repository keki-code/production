@extends('layouts.app')

@section('content')
  <a href="{{ route('counties.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">County name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($counties->items() as $county)
        <tr>
            <td>{{ $county->id }}</td>
            <td>{{ $county->county_name }}</td>
            <td>
              <a class="btn btn-outline-primary" href="{{ route('counties.show', ['county' => $county->id]) }}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('counties.edit', ['county' => $county->id]) }}">Edit</a>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection