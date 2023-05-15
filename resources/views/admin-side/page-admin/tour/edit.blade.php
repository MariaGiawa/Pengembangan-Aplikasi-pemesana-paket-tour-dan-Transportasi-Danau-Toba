<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Update Tour</title>
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
          <li class="breadcrumb-item active">Edit Paket Tour</li>
        </ol>
        <p style="color:red">*Gambar Tour Harus di update ulang</p>
        <form action="{{ route('tours.update', $tours->id ?? '') }}" method="POST" enctype="multipart/form-data">
      
          @csrf
          @method('PUT')
          <input type="hidden" name="id" value="{{ $tours->id }}">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Nama Tour</label>
                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$tours->nama}}" />
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Detail</label>
                <input type="text" id="detail" class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{$tours->detail}}" />
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Gambar</label>
                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg">
                @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
        </form>
      </div>
    </main>
    @endsection