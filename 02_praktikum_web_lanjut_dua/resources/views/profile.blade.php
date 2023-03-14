@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>Ini adalah halaman Profile</p>
    <p>Saya adalah {{$nama}} </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Profile'); 
    </script>
@stop

@section('footer')
    <footer>Ini Footer</footer>
@endsection