@extends('layouts.app')

@section('content')
  <a href="{{ route('suppliers.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Supplier name</th>
        <th scope="col">Supplier transportation form</th>
        <th scope="col">Supplier produce coast</th>
        <th scope="col">Supplier material type</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($suppliers->items() as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->supplier_name }}</td>
            <td>{{ $supplier->supplier_transportation_form }}</td>
            <td>{{ $supplier->supplier_produce_coast }}</td>
            <td>{{ $supplier->supplier_material_type }}</td>
            <td>
              <a class="btn btn-outline-primary" href="{{ route('suppliers.show', ['supplier' => $supplier->id]) }}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('suppliers.edit', ['supplier' => $supplier->id]) }}">Edit</a>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection