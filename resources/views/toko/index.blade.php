@extends('template/main')

@section('konten1')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/c1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/c2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/c3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('konten2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/p1.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">LAUT BERCERITA</h5>
        <p class="card-text">Pesan Sekarang!</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/p2.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">SAGARAS</h5>
        <p class="card-text">Pesan Sekarang!</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/p3.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">FILOSOFI TERAS</h5>
        <p class="card-text">Pesan Sekarang!</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/p4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">MATAHARI MINOR</h5>
        <p class="card-text">Pesan Sekarang!</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection