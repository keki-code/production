@extends('layouts.app')

@php
$currentUserId = \Auth::user()->id;
@endphp

@section('content')
<div class="jumbotron mt-5">
    <h1 class="display-4">Production</h1>
    <p class="lead">Production is not making people stupid. They are just making them more visible.</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="{{ route('users.show', ['user' => $currentUserId]) }}" role="button">Go to my profile</a>
</div>
@endsection