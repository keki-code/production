@extends('layouts.app')

@section('content')
    <div>
        <h3 class="mt-3">Material Consumptions detail</h3>
        <ul class="list-unstyled">
            <li>Material type: {{ $material_consumptions->material_consumption_type }}</li>
            <li>Material amount: {{ $material_consumptions->material_consumption_amount }}</li>
        </ul>
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection