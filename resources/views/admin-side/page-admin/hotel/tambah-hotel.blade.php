<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola Hotel</title>
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
        <h1 class="mt-4">Selamat Datang,</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Tambah Makanan Minuman</li>
        </ol>

        <form action="{{ route('formhotel.store') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Hotel</label>
                <input type="text" id="nama_hotel" class="form-control @error('nama_hotel') is-invalid @enderror" name="nama_hotel" value="{{old('nama_hotel')}}" />
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Lokasi</label>
                <input type="text" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{old('lokasi')}}" />

              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Harga</label>
                <input type="integer" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{old('harga')}}" />

              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Hotel</label>
                <input type="file" id="image_url" class="form-control @error('image_url') is-invalid @enderror" name="image" value="{{old('image')}}" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Deskripsi </label>
                <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}" />

              </div>
            </div>
            <div class="col">
            </div>
            @if($errors->any())
            <div class="mb-3">
              @foreach($errors->all() as $error)
              <p>{{$error}}</p>
              @endforeach
            </div>
            @endif
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Tambahkan</button>
        </form>
      </div>
    </main>
    @endsection