@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <ul>
        <li>Student ID  : {{ $user->student_id }}</li>
        <li>Name        : {{ $user->name }}</li>
        <li>Class       : {{ $user->grade->name }}</li>
    </ul>
@endsection

@section('footer')
    <p class="text-center">
        {{ $user->student_id }} | <a class="text-body" href="https://github.com/argyaWicaksana">{{ $user->name }}</a>
    </p>
@endsection
