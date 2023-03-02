@extends('templates.new')
@section('content')
<p>Menampilkan Kategori Minuman</p>
<div class="dropdown mb-2">
    <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Kategori
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/product">Semua</a></li>
        <li><a class="dropdown-item" href="/product/minuman">Minuman</a></li>
        <li><a class="dropdown-item" href="/product/makanan">Makanan</a></li>
    </ul>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://cdn.idntimes.com/content-images/community/2022/07/fromandroid-9a301eb3b31845c91db93458c81c0d0d_600x400.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Aneka Jus Buah</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 8.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://t-2.tstatic.net/medan/foto/bank/images/es-doger-buah-naga.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Es Doger</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 12.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://kabarjombang.com/wp-content/uploads/2023/02/angsle.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Angsle Spesial</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 6.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection