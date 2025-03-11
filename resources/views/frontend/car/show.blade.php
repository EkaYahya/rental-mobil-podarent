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
  .site-section .card {
    background: rgb(255, 255, 255);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
    padding: 20px;
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
    <!-- Optionally add any content here if needed -->
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
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
        <h2 class="section-heading text-center mb-5"><strong>ISI DATA ANDA</strong></h2>
        <div class="card p-5">
          <form action="{{ route('car.store') }}" method="post">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Lengkap</label>
              <input type="text" name="alamat_lengkap" value="{{ old('alamat_lengkap') }}" class="form-control" id="alamat">
            </div>
            <div class="form-group">
              <label for="nomer_wa">Nomer Hp/Whatsapp</label>
              <input type="text" name="nomer_wa" value="{{ old('nomer_wa') }}" class="form-control" id="nomer_wa">
            </div>
            <div class="form-group">
              <label for="hari_tanggal_pakai">Hari/Tanggal Pakai</label>
              <input type="date" name="hari_tanggal_pakai" value="{{ old('hari_tanggal_pakai') }}" class="form-control" id="hari_tanggal_pakai">
            </div>
            <div class="form-group">
              <label for="jam_pakai">Jam Pakai</label>
              <input type="time" name="jam_pakai" value="{{ old('jam_pakai') }}" class="form-control" id="jam_pakai">
            </div>
            <div class="form-group">
              <label for="tanggal_selesai">Tanggal Selesai</label>
              <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" class="form-control" id="tanggal_selesai">
            </div>
            <div class="form-group">
              <label for="jam_selesai">Jam Selesai</label>
              <input type="time" name="jam_selesai" value="{{ old('jam_selesai') }}" class="form-control" id="jam_selesai">
            </div>
            <div class="form-group">
              <label for="area_pemakaian">Area Pemakaian Mobil</label>
              <input type="text" name="area_pemakaian" value="{{ old('area_pemakaian') }}" class="form-control" id="area_pemakaian">
            </div>
            <div class="form-group">
              <label for="mobil_disewa">Mobil yang Disewa</label>
              <input type="text" name="mobil_disewa" value="{{ $car->name }}" class="form-control" id="mobil_disewa" readonly>
            </div>
            <div class="form-group">
              <label for="diambil_diantar_ke">Diambil/Diantar Ke</label>
              <input type="text" name="diambil_diantar_ke" value="{{ old('diambil_diantar_ke') }}" class="form-control" id="diambil_diantar_ke">
            </div>
            <button type="submit" class="btn btn-orange">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
