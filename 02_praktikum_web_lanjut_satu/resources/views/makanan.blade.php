@extends('templates.new')
@section('content')
<p>Menampilkan Kategori Makanan</p>
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
                <img src="https://d12man5gwydfvl.cloudfront.net/wp-content/uploads/2017/05/Rahasia-Resep-Ayam-Hainan-Singapore-yang-Dapat-Mudah-Dibuat-Di-Rumah.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Ayam Hainan</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 13.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/12/e495f222-cb5a-4e9e-b1c1-910485ec4a45.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Ayam Pop</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 13.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://asset.kompas.com/crops/7Y4VKeWC9OnZ5_F6Buhk1sXw7fA=/63x566:630x944/750x500/data/photo/2019/11/06/5dc1aaf4c9633.png" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Rames Ayam</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 13.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://asset.kompas.com/crops/VBs6hy5_8TPQwbLfAZRqZ3MwVN4=/556x0:5524x3312/750x500/data/photo/2022/07/18/62d4e8c69cef4.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Ayam Geprek</p>
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
                <img src="https://i0.wp.com/i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/762da2a6-d415-45a6-b36d-d63c0bdff059_Go-Biz_20211205_161519.jpeg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Ayam Bakar Lalapan</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 15.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-img-top">
                <img src="https://img-global.cpcdn.com/recipes/d43b19ce0fce32a9/1200x630cq70/photo.jpg" alt="" height="225" width="100%">
            </div>
            <div class="card-body">
                <p class="card-text">Nasi Ayam Laos</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rp. 15.000,00</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

