@extends('templates.app')
@section('main')
<main>
    <div class="container py-4">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">IniToko</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/product" class="nav-link {{$active=="product" ? 'active': ''}}">Product</a></li>
                <li class="nav-item"><a href="/about" class="nav-link {{$active== "about" ? 'active': ''}}">About</a></li>
            </ul> 
        </header>
        @yield('content')
        <footer class="pt-3 mt-4 text-muted border-top">
            © 2023
        </footer>
    </div>
</main>
@endsection
    
