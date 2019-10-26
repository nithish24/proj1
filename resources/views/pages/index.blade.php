@extends('layouts.basic_layout')

@section('navbar')
    @include('inc.navbar')
@endsection


@section('content')

<div class="jumbotron text-center">
    <h1>MOOC'S MANAGEMENT SYSTEM</h1>
    <p>One place to manage all online course records of students</p>
    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
</div>
@endsection
