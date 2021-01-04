@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">County name</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($counties->items() as $county)
        <tr>
            <td>{{ $county->id }}</td>
            <td>{{ $county->county_name }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection