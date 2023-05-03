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
        <h4 class="mt-4">Selamat Datang, {{Auth::user()->name}}</h4>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Transportasi</li>
        </ol>
        <p style="color:red">*Gambar Transportasi Harus di update ulang</p>
        <form action="{{ route('transportations.update', $transportation->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Transportasi</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$transportation->name}}" />
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Tipe</label>
                <input type="text" id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$transportation->type}}" />
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Harga</label>
                <input type="number" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$transportation->price}}" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Durasi</label>
                <input type="text" id="duration" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{$transportation->duration}}" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Jalur</label>
                <input type="text" id="route" class="form-control @error('route') is-invalid @enderror" name="route" value="{{$transportation->route}}" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Lokasi</label>
                <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{$transportation->location}}" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Transportasi</label>
                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$transportation->image}}" />
              </div>
            </div>
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
        </form>
      </div>
    </main>
    @endsection