@extends('layouts.app')

@section('content')

<div>
    <h3 class="mt-3">County details</h3>
    <ul class="list-unstyled">
        <li>Id: {{ $county->id }}</li>
        <li>Name: {{ $county->county_name }}</li>
        <li><a href="https://en.wikipedia.org/w/index.php?search={{ $county->county_name }}">Wikipedia link</a></li>
    </ul>
</div>

<div class="btn-group" role="group" aria-label="Basic example">
<a class="btn btn-secondary" href="{{ route('counties.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('counties.edit', ['county' => $county]) }}">Edit</a>

<form class="form-inline" action="{{ route('counties.destroy', ['county' => $county->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>



@endsection 