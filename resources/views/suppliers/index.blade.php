@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Supplier name</th>
        <th scope="col">Supplier transportation form</th>
        <th scope="col">Supplier produce coast</th>
        <th scope="col">Supplier material type</th>
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
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection