@extends('layouts.basic_layout')

@section('content')
    @if(count($pd)>0)
        <?php
        $m=[];
        foreach ($pd as $key )
        {
            $cname = strtoupper($key->CourseName);
            if(array_key_exists($cname,$m))
            {
                $m[$cname]+=1 ;
            }
            else
            {
                $m[$cname] = 1;
            }
        }

        ?>


        <table style="width:100%">

            <center class="table-name"><h1>MOOC'S DETAILS</h1></center>
            <br/><br/>
            <tr>
                <th class= "summary-header" width="20%" >Sl.No</th>
                <th class= "summary-header" width="60%">Course Name</th>
                <th class= "summary-header" width="20%">Count</th>
            </tr>

            <?php $i=1?>
            @foreach($m as $key=>$value)
                <tr>
                    <td class="summary-header-cell">{{$i++}}</td>
                    <td  class="summary-header-cell">{{$key}}</td>
                    <td class= "summary-header-count">{{$value}}</td>
                </tr>
            @endforeach

        </table>
    @else
        <p>There's nothing</p>
    @endif
@endsection
