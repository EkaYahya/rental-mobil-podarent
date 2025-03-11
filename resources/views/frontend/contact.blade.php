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
  .site-section {
    padding: 60px 0;
  }
  .site-section .container {
    max-width: 960px;
  }
  .alert {
    border-radius: 4px;
    padding: 15px;
  }
  .alert-dismissible .close {
    top: 0;
    right: 0;
    padding: 15px;
    color: inherit;
  }
  .bg-white {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
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
          <h1><strong>About</strong></h1>
          <div class="custom-breadcrumbs">
            <a href="index.html">Home</a> <span class="mx-2">/</span>
            <strong>About</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
      <strong><h2>Kontak Kami</h2></strong>
        <p>Saran dan kritik yang kami harapkan</p>
        @if(count($errors) > 0)
        <div class="content-header mb-0 pb-0">
          <div class="container-fluid">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        @endif
        @if(session()->has('message'))
        <div class="content-header mb-0 pb-0">
          <div class="container-fluid">
            <div class="mb-0 alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
              <strong>{{ session()->get('message') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mb-5">
        <form action="{{ route('contact.store') }}" method="post">
          @csrf
          <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
              <input
                type="text"
                class="form-control"
                name="nama_awal"
                placeholder="Nama Awal"
              />
            </div>
            <div class="col-md-6">
              <input
                type="text"
                name="nama_akhir"
                class="form-control"
                placeholder="Nama Akhir"
              />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input
                type="text"
                name="email"
                class="form-control"
                placeholder="Alamat Email"
              />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea
                name="pesan"
                id="pesan"
                class="form-control"
                placeholder="Pesan yang membangun."
                cols="30"
                rows="10"
              ></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input
                type="submit"
                class="btn btn-block btn-orange text-white py-3 px-5"
                value="Kirim Pesan"
              />
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 ml-auto">
        <div class="bg-white p-3 p-md-5">
          <h3 class="text-black mb-4">Alamat Kami</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block mb-3">
              <span class="d-block text-black">Alamat Lengkap:</span>
              <span>{{ $setting->alamat ?? '-' }}</span>
            </li>
            <li class="d-block mb-3">
              <span class="d-block text-black">Phone:</span>
              <span>{{ $setting->phone ?? "-" }}</span>
            </li>
            <li class="d-block mb-3">
              <span class="d-block text-black">Email:</span>
              <span>{{ $setting->email ?? "-" }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
