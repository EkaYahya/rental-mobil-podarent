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
          <h1><strong>Blog</strong></h1>
          <div class="custom-breadcrumbs">
            <a href="{{ url('/') }}">Home</a> <span class="mx-2">/</span>
            <strong>Blog</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      @forelse($blogs as $blog)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="{{ route('blog.show',$blog->slug) }}">
              <img src="{{ Storage::url($blog->image) }}" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
              <span class="meta d-inline-block mb-3">{{ date('M d, Y', strtotime($blog->created_at)) }}</span>
              <p>{{ $blog->excerpt }}</p>
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
