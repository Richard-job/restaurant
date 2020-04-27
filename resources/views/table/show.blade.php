@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>Number</th>
            <th>Amount people</th>
            <th>is Used</th>
        </tr>
        <tr>
            <td>{{$table->number}}</td>
            <td>{{$table->amount_people}}</td>
            <td>{{$table->is_used}}</td>
            <td><a href="{{route('tables.edit',$table->id)}}">Edit</a></td>
            <td>

                <form action="{{route('tables.destroy', $table->id)}}" method="post">
                    @csrf
                    @method('delete')
                    
                    <button type="submit">Delete</button>
                </form>
                
            </td>
        </tr>
    </table>

@endsection