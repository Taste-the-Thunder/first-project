@extends('layout')

@section('main-section')

<h1>Students Form</h1><br>
<form action="/student" method="POST">
    @csrf
    <input type="text" name="roll_no" placeholder="roll_no" value="{{old('roll_no')}}">
    @error('roll_no')
        {{ $message }}
    @enderror
    <br>
    <input type="text" name="name" placeholder="name" value="{{old('name')}}" >
    @error('name')
        {{ $message }}
    @enderror
    <br>
    <input type="submit" value="submit">
</form>
<br>

@foreach ($studentData as $student)
{{ $student->roll_no }} {{ $student->name }}
    <form action="student/{{$student->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
    <br>
@endforeach

@endsection
