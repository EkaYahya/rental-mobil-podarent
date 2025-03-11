@extends('frontend.layout')

@section('content')
<style>
  body {
    background: rgb(245, 245, 245);
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  }
  .section-dark .intro h1 {
    color: #fff !important;
  }

  .section-dark .intro {
    color: #fff !important;
  }

  .trip-form select,
  .trip-form input[type="submit"] {
    font-weight: bold;
    font-size: 1rem;
  }
  
  .trip-form select {
    color: #000;
  }

  .trip-form input[type="submit"] {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #000;
    border-radius: 4px;
    transition: background-color 0.3s, border-color 0.3s;
  }
  
  .trip-form input[type="submit"]:hover {
    background-color: #e0a800;
    border-color: #e0a800;
  }
  .section-light {
    background-color: rgb(250, 250, 250);
    color: rgb(50, 50, 50);
    padding: 60px 0;
  }

  .section-dark {
    background-color: rgb(34, 34, 34);
    color: rgb(245, 245, 245);
    padding: 60px 0;
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
  .custom-img-container {
    padding: 0 !important;
    margin: 0 !important;
    box-shadow: none !important;
    border: none !important;
    overflow: hidden !important;
    border-radius: 8px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .img-wrap-1 {
    padding: 0 !important;
    margin: 0 !important;
    overflow: hidden !important;
    border-radius: 8px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
  }

  .img-wrap-1 img {
    max-width: 100%;
    height: auto;
    border: none !important;
    box-shadow: none !important;
    display: block;
    margin: auto;
  }
  .step-inner .number {
    color: rgb(199, 148, 2);
    font-size: 24px;
    font-weight: bold;
  }

  .step {
    position: relative;
    padding-left: 60px;
    margin-bottom: 30px;
  }

  .step span {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 48px;
    color: rgb(199, 148, 2);
    font-weight: bold;
  }

  .intro {
    color: rgb(245, 245, 245);
    text-align: left;
  }

  .hero {
    background: url('{{ asset('frontend/images/2.png') }}') no-repeat center center/cover;
    color: rgb(245, 245, 245);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 0;
  }

  .hero .container {
    position: relative;
    z-index: 1;
  }

  .section-header {
    margin-bottom: 50px;
    text-align: center;
  }

  .section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: rgb(34, 34, 34);
  }

  .section-header p {
    font-size: 1.1rem;
    color: rgb(141, 128, 127);
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

.testimonial-2 {
  border: none; /* Removes the blue border */
  background-color: white; /* Ensures the background is white */
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.testimonial-2 blockquote {
  color: black; /* Changes the text color to black */
}

.testimonial-2 .author-name {
  color: black; /* Changes the author's name and job title color to black */
}

.testimonial-2 img {
  border-radius: 50%; /* Makes the image round */
}

  .v-card {
    margin-top: 10px;
    display: flex;
    align-items: center;
  }

  .v-card img {
    border-radius: 50%;
    margin-right: 15px;
    width: 80px;
    height: 80px;
    object-fit: cover;
  }

  .v-card .author-name {
    color: rgb(141, 128, 127);
  }

  .blog .listing {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .blog .listing:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .blog .listing-img {
    height: 200px;
    overflow: hidden;
  }

  .blog .listing-img img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    transition: transform 0.3s;
  }

  .blog .listing-img img:hover {
    transform: scale(1.05);
  }

  .komitmen-pelayanan {
    position: relative;
    background: url('{{ asset('frontend/images/bgputih.jpg') }}') no-repeat center center/cover;
    color: rgb(245, 245, 245);
    padding: 100px 0;
  }

  .komitmen-pelayanan::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 0;
  }

  .komitmen-pelayanan .container {
    position: relative;
    z-index: 1;
  }

  .komitmen-pelayanan .img-wrap-1 {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .komitmen-pelayanan .img-wrap-1 img {
    border-radius: 8px;
    width: 100%;
    height: auto;
  }

  .komitmen-pelayanan h3 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: rgb(255, 255, 255);
  }

  .komitmen-pelayanan p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: rgb(245, 245, 245);
  }

  .komitmen-pelayanan .btn {
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 4px;
  }

  /* New styles for testimonials and commitment section */
  .testimonial-section {
    background-color: #fff;
    position: relative;
    padding: 60px 0;
  }

  .testimonial-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 0;
  }

  .testimonial-section .container {
    position: relative;
    z-index: 1;
  }

  .testimonial-section .section-heading, .testimonial-section p {
    color: #fff;
  }

  .testimonial-section .testimonial-2 {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .testimonial-section .testimonial-2 blockquote {
    color: #000;
  }

  .komitmen-pelayanan::before {
    background: rgba(0, 0, 0, 0.6);
  }

  .testimonial-2 {
    background: #fff !important;
  }
</style>

<div class="hero section-dark">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="row mb-5">
          <div class="col-lg-7 intro text-white">
            <h1><strong>Sewa Mobil Bandung</strong> Murah dan Terpercaya</h1>
          </div>
        </div>
        <form class="trip-form" method="get" action="{{ route('car.index') }}">
          <div class="row align-items-center">
            <div class="mb-3 mb-md-0 col-md-4">
              <select name="category_id" id="category_id" class="custom-select form-control">
                <option value="">Pilih Kategori Mobil</option>
                @foreach($types as $type)
                  <option value="{{ $type->id }}">{{ $type->nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 mb-md-0 col-md-4">
              <select name="penumpang" id="penumpang" class="custom-select form-control">
                <option value="">Jumlah Penumpang</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="mb-3 mb-md-0 col-md-4">
              <input type="submit" value="Cari" class="btn btn-orange btn-block py-3" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="site-section section-light">
  <div class="container">
    <div class="section-header">
      <h2><strong>Cara Pemesanan</strong></h2>
      <p>Langkah yang mudah untuk menyewa mobil</p>
    </div>
    <div class="row mb-5">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step">
          <span>1</span>
          <div class="step-inner">
            <h3>Pilih Mobil</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step">
          <span>2</span>
          <div class="step-inner">
            <h3>Isi Form</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step">
          <span>3</span>
          <div class="step-inner">
            <h3>Pembayaran</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section komitmen-pelayanan">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 text-center order-lg-2 custom-img-container">
        <div class="img-wrap-1 mb-5">
          <img src="{{ asset('frontend/images/feature_01.png') }}" alt="Image" class="img-fluid img-responsive" />
        </div>
      </div>
      <div class="col-lg-4 ml-auto order-lg-1">
        <h3 class="mb-4 section-heading">
          <strong>Kami berkomitmen untuk memberikan pelayanan terbaik</strong>
        </h3>
        <p class="mb-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!
        </p>
        <p><a href="#" class="btn btn-orange">Kontak Kami</a></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section section-light">
  <div class="container">
    @foreach($types as $type)
      <div class="row">
        <div class="col-lg-7">
          <h2 class="section-heading"><strong>{{ $type->nama }}</strong></h2>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>

      <div class="row">
  @foreach($cars->where('type_id', $type->id) as $car)
      <div class="col-md-6 col-lg-4 mb-4">
          <div class="listing d-block align-items-stretch">
              <div class="listing-img h-100 mr-4" style="width: 100%; height: auto; max-height: 400px; overflow: hidden;">
                <img src="{{ Storage::url($car->image) }}" alt="Image" class="img-fluid" style="width: 100%; height: auto;"/>
              </div>
              <div class="listing-contents h-100">
                  <h1>{{ $car->nama_mobil }}</h1>
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
                      <p><a href="{{ route('car.show', $car) }}" class="btn btn-orange btn-sm">Sewa Sekarang</a></p>
                  </div>
              </div>
          </div>
      </div>
  @endforeach
</div>
    @endforeach
  </div>
</div>


<div class="testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="section-heading"><strong>Testimonial</strong></h2>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
    <div class="row">
      @foreach($testimonials as $testimonial)
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2" style="border: none; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <blockquote class="mb-4" style="color: black;">
              <p style="color: black;">{{ $testimonial->pesan }}</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="{{ Storage::url($testimonial->profile) }}" alt="Image" class="img-fluid mr-3" style="border-radius: 50%;" />
              <div class="author-name" style="color: black;">
                <span class="d-block">{{ $testimonial->name }}</span>
                <span>{{ $testimonial->pekerjaan }}</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>



<div class="site-section section-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="section-heading"><strong>Blog</strong></h2>
        <p class="mb-5">Berita dan artikel terbaru</p>
      </div>
    </div>
    <div class="row">
      @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="listing d-block align-items-stretch">
            <div class="listing-img h-100 mr-4">
              <img src="{{ Storage::url($blog->image) }}" alt="Image" class="img-fluid" />
            </div>
            <div class="listing-contents h-100">
              <h3>{{ $blog->title }}</h3>
              <p>{{ $blog->excerpt }}</p>
              <p><a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-orange btn-sm">Baca Selengkapnya</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
