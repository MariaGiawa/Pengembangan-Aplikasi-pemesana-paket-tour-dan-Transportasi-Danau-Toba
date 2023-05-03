<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola Transportasi</title>
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
          <li class="breadcrumb-item active">Tambah Transportasi</li>
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

        <form action="{{ route('transportations.store') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Transportation</label>
                <input type="text" id="nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" />
              </div>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="type">Tipe</label>
                <input type="text" id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{old('type')}}" />
              </div>
              @error('type')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Harga</label>
                <input type="number" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}" />
              </div>
              @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Durasi</label>
                <input type="text" id="duration" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{old('duration')}}" />
              </div>
              @error('duration')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Jalur</label>
                <input type="text" id="route" class="form-control @error('route') is-invalid @enderror" name="route" value="{{old('route')}}" />
              </div>
              @error('route')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">lokasi</label>
                <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{old('location')}}" />
              </div>
              @error('location')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Transportation</label>
                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}" />
              </div>
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <!-- <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Gambar Paket Tour</label>
                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}" />
              </div>
            </div> -->
          </div>


          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Tambahkan</button>
        </form>
      </div>
    </main>
    @endsection