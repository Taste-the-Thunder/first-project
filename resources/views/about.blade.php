@extends('layout')
@section('main-section')

    hello about {{ $name1 }}
    <br>
    <?php
        echo $name
    ?>
    <br>
    {!! $name !!} {{ $surname }}
    @if($surname == 'Prajapati')
        hello
        <h1>hurreeeeee</h1>
    @endif
    {{-- {{ $users }} --}}
    @foreach ($users as $user)
        <p>This is user {{ $user }}</p>
    @endforeach

@endsection
