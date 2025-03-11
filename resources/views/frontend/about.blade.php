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
  .post-entry-1 {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .post-entry-1:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  .post-entry-1 img {
    object-fit: cover;
    width: 100%;
    height: auto;
    transition: transform 0.3s;
  }
  .post-entry-1 img:hover {
    transform: scale(1.05);
  }
  .post-entry-1-contents {
    padding: 20px;
  }
  .post-entry-1-contents h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  .post-entry-1-contents .meta {
    color: rgb(141, 128, 127);
  }
  .sidebar-box .categories li {
    list-style: none;
    margin-bottom: 10px;
  }
  .sidebar-box .categories li a {
    color: rgb(50, 50, 50);
    text-decoration: none;
  }
  .sidebar-box .categories li a:hover {
    color: rgb(199, 148, 2);
  }
  .section-2-title h2 {
    font-size: 2rem;
  }
  .section-2-title p {
    font-size: 1.1rem;
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

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
        <img src="{{ asset('frontend/images/logo.svg') }}" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-lg-4 mr-auto">
        <h2>Car Company</h2>
        <p>{{ $setting->tentang_perusahaan }}</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 section-2-title">
      <div class="col-md-6">
        <h2 class="mb-4">Our Certification</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <img src="{{ asset('frontend/images/sertifikat.png') }}" alt="Image" class="img-fluid rounded">
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
        <h2>Our History</h2>
        <p>{{ $setting->sejarah_perusahaan }}</p>
    </div>
  </div>
</div>
@endsection
