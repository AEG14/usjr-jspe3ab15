<!-- resources/views/colleges/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    <ul>
        @foreach($colleges as $college)
            <li>
                {{ $college->collfullname }}
                <a href="{{ url('/show/college/' . $college->collid) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
