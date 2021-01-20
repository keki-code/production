@extends('layouts.app')

@section('content')
    <div>
        <h3 class="mt-3">Supplier detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $suppliers->supplier_name }}</li>
            <li>Transportation form: {{ $suppliers->supplier_transportation_form }}</li>
            <li>Produce coast: {{ $suppliers->supplier_produce_coast }}</li>
            <li>Material type: {{ $suppliers->supplier_material_type }}</li>
            <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $suppliers->suppliers_name }}">Wikipedia link</a></li>
        </ul>
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection