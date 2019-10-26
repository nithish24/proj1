@extends('layouts.basic_layout')

@section('content')
    @if(count($result)>0)
        <table style="width:100%">
            <center class="table-name"><h1>COURSE DETAILS</h1></center>
            <br/><br/>
            <tr>
                <th class= "summary-header" width="5%">Sl.No</th>
                <th class= "summary-header" width="15%">USN</th>
                <th class= "summary-header" width="15%">Name</th>
                <th class= "summary-header" width="25%">Course Name</th>
                <th class= "summary-header" width="10%">Status</th>
                <th class= "summary-header" width="35%">Link</th>
            </tr>
            <?php $i=1?>
            @foreach($result as $key)
                <tr>
                    <td class="summary-header-cell">{{$i++}}</td>
                    <td class="summary-header-cell"><a href="details/{{$key->USN}}/{{$key->CourseName}}" />{{$key->USN}}</td>
                    <td class="summary-header-cell">{{$key->StudentName}}</td>
                    <td class="summary-header-cell">{{$key->CourseName}}</td>
                    <td class="summary-header-cell">{{$key->Status}}</td>
                    <td class="summary-header-cell"><a href={{$key->CertificateLink}} />{{$key->CertificateLink}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>There's nothing</p>
    @endif
@endsection
