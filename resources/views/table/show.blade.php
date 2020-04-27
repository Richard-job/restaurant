@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>Number:</th>
            <th>Amount people</th>
            <th>is Used</th>
        </tr>
        <tr>
            <td>{{$t->number}}</td>
            <td>{{$t->amount_people}}</td>
            <td>{{$t->is_used}}</td>
            <td><a href="{{route('tables.edit',$table->id)}}">Edit</a></td>
            <form action="{{route('tables.destroy', $table->id)}}" method="post">
                @csrf
                @method('delete')
            
                <button type="submit">Delete</button>
            </form>
        </tr>
    </table>

@endsection