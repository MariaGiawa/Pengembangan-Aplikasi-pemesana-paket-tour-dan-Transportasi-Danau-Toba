<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola restaurant</title>
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
          <li class="breadcrumb-item active">Edit restaurant</li>
        </ol>
        <p style="color:red">*Gambar restaurant Harus di update ulang</p>
        <form action="{{ route('restaurant.ubah', $restaurant) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama restaurant</label>
                <input type="text" id="nama_restaurant" class="form-control @error('nama_restaurant') is-invalid @enderror" name="nama_restaurant" value="{{$restaurant->nama_restaurant}}" />

                @error('nama_restaurant')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">lokasi</label>
                <input type="text" id="form6Example1" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{$restaurant->lokasi}}" />
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
                <input type="number" id="form6Example1" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{$restaurant->harga}}" />
                @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Restaurant</label>
                <input type="file" id="form6Example2" class="form-control @error('images') is-invalid @enderror" name="images[]" value="{{$restaurant->images}}" multiple /><br>
                @foreach($restaurant->images as $image)
                <img src="{{ asset('storage/restaurant/' . $image->images) }}" style="width:40px; height: 40px; object-fit: cover; border:1px solid black;" alt="" data-toggle="modal" data-target="#myModalgambar{{$image->restaurant_id}}" >
                <label for="delete_image_{{ $image->id }}">
                  Delete
                  <input type="checkbox" name="deleted_images[]" id="delete_image_{{ $image->id }}" value="{{ $image->id }}">
                </label>
                @endforeach
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="description">Deskripsi</label>
                <textarea type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{$restaurant->description}}</textarea>
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