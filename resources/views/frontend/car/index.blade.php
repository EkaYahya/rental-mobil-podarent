@extends('frontend.layout')

@section('content')
<style>
  .hero-inner {
    background: url('{{ asset('frontend/images/hero_1_a.jpg') }}') no-repeat center center/cover;
    color: rgb(245, 245, 245);
    padding: 150px 0; /* Menambahkan padding untuk menurunkan teks */
    position: relative;
    overflow: hidden;
  }
  .hero-inner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 0;
  }
  .hero-inner .container {
    position: relative;
    z-index: 1;
  }
  .hero-inner .intro h1 {
    color: #fff; /* Membuat teks putih */
  }
  .hero-inner .custom-breadcrumbs a, .hero-inner .custom-breadcrumbs strong {
    color: #fff;
  }
  .site-section.bg-light {
    background-color: rgb(250, 250, 250);
    color: rgb(50, 50, 50);
    padding: 60px 0;
  }
  .listing {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .listing:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  .listing-img {
    height: 200px;
    overflow: hidden;
  }
  .listing-img img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    transition: transform 0.3s;
  }
  .listing-img img:hover {
    transform: scale(1.05);
  }
  .btn-orange {
    background-color: rgb(199, 148, 2);
    border-color: rgb(199, 148, 2);
    color: rgb(255, 255, 255);
    border-radius: 4px;
    padding: 10px 20px;
    transition: background-color 0.3s, border-color 0.3s, color 0.3s;
  }
  .btn-orange:hover {
    background-color: rgb(255, 215, 0);
    border-color: rgb(255, 215, 0);
    color: rgb(34, 34, 34);
  }
  .text-orange {
    color: rgb(199, 148, 2);
  }
</style>

<div class="hero-inner">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-5">
        <div class="intro">
          <h1><strong>Daftar Mobil</strong></h1>
          <div class="custom-breadcrumbs">
            <a href="{{ url('/') }}">Home</a> <span class="mx-2">/</span>
            <strong>Daftar Mobil</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
        <p class="mb-5">
          Kami menyediakan berbagai macam mobil.
        </p>
      </div>
    </div>

    <div class="row">
      @forelse($cars as $car)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="listing d-block align-items-stretch">
            <div class="listing-img h-100 mr-4">
              <img src="{{ Storage::url($car->image) }}" alt="Image" class="img-fluid" />
            </div>
            <div class="listing-contents h-100">
              <h3>{{ $car->nama_mobil }}</h3>
              <div class="rent-price">
                <strong class="text-black">Rp{{ number_format($car->price,0,",",".") }}</strong><span class="mx-1">/</span>hari
              </div>
              <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                <div class="listing-feature pr-4">
                  <span class="caption">Pintu:</span>
                  <span class="number text-black font-weight-bold">{{ $car->pintu }}</span>
                </div>
                <div class="listing-feature pr-4">
                  <span class="caption">Penumpang:</span>
                  <span class="number text-black font-weight-bold">{{ $car->penumpang }}</span>
                </div>
              </div>
              <div>
                <p>{{ $car->description }}</p>
                <p>
                  <a href="{{ route('car.show', $car) }}" class="btn btn-orange btn-sm">Sewa Sekarang</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      @empty
        <p class="display-4 text-center mx-auto">Data yang anda cari kosong !</p>
      @endforelse
    </div>
  </div>
</div>
@endsection
