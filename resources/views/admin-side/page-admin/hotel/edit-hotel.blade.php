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
        <h1 class="mt-4">Selamat Datang, {{Auth::user()->name}}</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Hotel</li>
        </ol>
        <p style="color:red">*Gambar Hotel Harus di update ulang</p>
        <form action="{{ route('hotel.ubah', $hotel) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Hotel</label>
                <input type="text" id="nama_hotel" class="form-control @error('nama_hotel') is-invalid @enderror" name="nama_hotel" value="{{$hotel->nama_hotel}}" />

                @error('nama_hotel')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">lokasi</label>
                <input type="text" id="form6Example1" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{$hotel->lokasi}}" />
                @error('lokasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Harga</label>
                <input type="number" id="form6Example1" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{$hotel->harga}}" />
                @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Barang</label>
                <input type="file" id="form6Example2" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$hotel->image}}" />
                @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Deskripsi</label>
                <textarea type="text" id="form6Example1" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$hotel->description}}"></textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col">
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>
        </form>
      </div>
    </main>
    @endsection