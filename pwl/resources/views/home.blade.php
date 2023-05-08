@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Hi, Welcome {{ ':)' }}</p>
@endsection

@section('footer')
    <p class="text-center">
        {{ $user->student_id }} | <a class="text-body" href="https://github.com/argyaWicaksana">{{ $user->name }}</a>
    </p>
@endsection

@section('js')
    <script>
        alert('Welcome :)')
    </script>
@endsection
