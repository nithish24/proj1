@extends('layouts.basic_layout')

@section('content')


    <h1>{{$pd->StudentName}}</h1>
        <div class="jumbotron">
            <h2>USN :<span>{{$pd->USN}}</span></h2>
            <h2>Course Name:<span>{{$pd->CourseName}}</span></h2>
            <h2>Description: <br/><br/><span>{{$pd->Description}}</span></h2>
            <h2>Duration:<br/></h2>
            <h2>Start time:<span>{{$pd->BeginDate}}<br/>
                End time:{{$pd->EndDate}} </span></h2>
        </div>


    <!--<table>
        <tr>
            <td><h3>USN :</h3></td>
            <td><h5>{{$pd->USN}}</h5></td>
        </tr>
        <tr>
            <td><h2>Course Name:</h2></td>
            <td><h3>{{$pd->CourseName}}</h3></td>
        </tr>
        <tr>
            <td colspan='2'><h2>Description:</h2></td>
            <td><h3>{{$pd->Description}}</h3></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>-->

@endsection
