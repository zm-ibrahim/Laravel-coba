@extends('adminlte::page')

@section('title', 'College Experience')

@section('content_header')
    <h1>College Experience</h1>
@endsection

@section('content')
    <p>
        {{ $user->college_exp }}
    </p>
@endsection

@section('footer')
    <p class="text-center">
        {{ $user->student_id }} | <a class="text-body" href="https://github.com/argyaWicaksana">{{ $user->name }}</a>
    </p>
@endsection
