<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $student->studfirstname }} {{ $student->studlastname }}</h1>
    <p>Program: {{ $student->program->progfullname }}</p>
    <p>College: {{ $student->college->collfullname }}</p>
    <p>Year: {{ $student->studyear }}</p>
@endsection
