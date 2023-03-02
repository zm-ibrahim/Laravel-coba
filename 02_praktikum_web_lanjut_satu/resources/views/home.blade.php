@extends('templates.app')
@section('main')
<main>
    <div class="container py-3">
        <div class="p-5 mb-4 bg-dark rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-1 fw-bold text-bg-dark">Homepage | IniToko</h1>
                <p class="display-4 col-md-8 fs-4 text-bg-dark">Cepat, Lezat, Nikmat !</p>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-danger rounded-3">
                        <h2>Produk Terbaik</h2>
                        <p>Manjakan lidah kalian dengan kudapan dan makanan cepat, nikmat, dan lezat untuk disantap, dengan bahan-bahan terbaik pilihan</p>
                        <a href="/product"><button class="btn btn-outline-light" type="button">Lihat Produk</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Kenal Lebih dekat</h2>
                        <p>Sebuah perusahaan yang bergerak dibidang makanan siap saji dengan pandangan kedepan</p>
                        <a href="/about">
                            <button class="btn btn-outline-secondary" type="button">Lihat Profil</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pt-3 mt-4 text-muted border-top">
            © 2023 | Zaky Muhammad Ibrahim
        </footer>
    </div>
</main>
@endsection
    