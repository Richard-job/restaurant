@extends('layouts.app')

@section('content')

    <form action="{{route('tables.update', $table->id)}}" method="post">
        @csrf
        @method('put')
        
        <div>
            <label for="number">number:</label>
            <input type="number" name="number" id="number" value="{{$table->number}}" class="@error('number') is-invalid @enderror">
            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div>
            <label for="amount_people">Amount People:</label>
            <input type="number" name="amount_people" id="amount_people" value="{{$table->amount_people}}" class="@error('amount_people') is-invalid @enderror">
            @error('amount_people')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit">Edit</button>
    </form>

@endsection