<!-- resources/views/departments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Departments</h1>
    <ul>
        @foreach($departments as $department)
            <li>
                {{ $department->deptfullname }}
                (College: {{ $department->college->collfullname }})
            </li>
        @endforeach
    @endforeach
    </ul>
@endsection
