@extends('layouts.basic_layout')

@section('content')
    <center><h1 class="admin-header">Welcome Admin</h1></center>
    <div>
        <ul class="list-group">
            <li class="list-goup-item"><a href = "/details/summary">Summary</li>
            <li class="list-goup-item"><a href = "/details">Course Details</a></li>

        </ul>
    </div>
@endsection
