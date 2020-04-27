@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>Number</th>
            <th>Amount People</th>
            <th>Is Used</th>
        </tr>
        @foreach ($tables as $t)
            <tr>
                <td>{{$t->number}}</td>
                <td>{{$t->amount_people}}</td>
                <td>{{$t->is_used}}</td>
                <td><a href="{{route('tables.show',$t->id)}}">View</a></td>
            </tr>
        @endforeach
    </table>

@endsection