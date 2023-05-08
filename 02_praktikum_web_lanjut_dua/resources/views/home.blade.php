@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to Dashboard</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); 
    alert("Selamat Datang !");
    </script>
@stop

@section('footer')
    <footer>2141720131 | Zaky Muhammad Ibrahim</footer>
@endsection
