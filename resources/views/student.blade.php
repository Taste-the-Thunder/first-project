@extends('layout')

@section('main-section')

<h1>Students Form</h1><br>
<form action="/student" method="POST">
    @csrf
    <input type="text" name="roll_no" placeholder="roll_no"><br>
    <input type="text" name="name" placeholder="name"><br>
    <input type="submit" value="submit">
</form>

@endsection
