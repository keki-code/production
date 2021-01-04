@extends('layouts.app')

@section('content')
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Material consumption type</th>
          <th scope="col">Material consumption amount</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($material_consumptions->items() as $material_consumption)
          <tr>
              <td>{{ $material_consumption->id }}</td>
              <td>{{ $material_consumption->material_consumption_type }}</td>
              <td>{{ $material_consumption->material_consumption_amount }}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
@endsection