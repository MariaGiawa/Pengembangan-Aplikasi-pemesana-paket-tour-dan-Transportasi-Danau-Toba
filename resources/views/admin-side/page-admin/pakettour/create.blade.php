<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola Tour</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  @extends('layouts\app')
  @section('main')
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Selamat Datang, {{Auth::user()->name}}</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Tambah Tour</li>
        </ol>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('paket-tour.store') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Paket Tour</label>
                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}" />
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Diskon</label>
                <input type="text" id="diskon" class="form-control @error('diskon') is-invalid @enderror" name="diskon" value="{{old('diskon')}}" />
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Harga Awal</label>
                <input type="number" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{old('harga')}}" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Harga Total</label>
                <input type="number" id="hargatotal" class="form-control @error('hargatotal') is-invalid @enderror" name="hargatotal" value="{{old('hargatotal')}}" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Jumlah Hari</label>
                <input type="number" id="jumlah_hari" class="form-control @error('jumlah_hari') is-invalid @enderror" name="jumlah_hari" value="{{old('jumlah_hari')}}" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Jumlah Orang</label>
                <input type="number" id="jumlahorang" class="form-control @error('jumlahorang') is-invalid @enderror" name="jumlahorang" value="{{old('jumlahorang')}}" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Detail</label>
                <textarea type="text" id="detail" class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{old('detail')}}"></textarea>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Deskripsi</label>
                <textarea type="text" id="descripsi" class="form-control @error('descripsi') is-invalid @enderror" name="descripsi" value="{{old('descripsi')}}"></textarea>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Kegiatan</label>
                <textarea type="text" id="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" name="kegiatan" value="{{old('kegiatan')}}"></textarea>

              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Deskripsi Hari</label>
                <textarea type="text" id="descripsihari" class="form-control @error('descripsihari') is-invalid @enderror" name="descripsihari" value="{{old('descripsihari')}}"></textarea>

              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Paket Tour</label>
                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}" />
              </div>
            </div>
          </div>


          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Tambahkan</button>
        </form>
      </div>
    </main>
    @endsection