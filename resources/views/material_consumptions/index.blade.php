@extends('layouts.app')

@section('content')
  <a href="{{ route('material_consumptions.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Material consumption type</th>
          <th scope="col">Material consumption amount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($material_consumptions->items() as $material_consumption)
          <tr>
              <td>{{ $material_consumption->id }}</td>
              <td>{{ $material_consumption->material_consumption_type }}</td>
              <td>{{ $material_consumption->material_consumption_amount }}</td>
              <td>
              <a class="btn btn-outline-primary" href="{{ route('material_consumptions.show', ['material_consumption' => $material_consumption->id]) }}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('material_consumptions.edit', ['material_consumption' => $material_consumption->id]) }}">Edit</a>
          </tr>
      @endforeach
      </tbody>
    </table>
@endsection