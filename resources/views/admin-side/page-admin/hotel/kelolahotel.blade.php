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
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Selamat Datang, {{Auth::user()->name}}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Kelola Hotel</li>
                </ol>
                <div class="col-3">
                    <a href="{{ url('/tambah-hotel') }}">
                        <button class="btn btn-outline-success">Tambah Hotel</button>
                    </a>
                </div>
                </br>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Hotel
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Nama Hotel</th>
                                    <th style="text-align: center">Lokasi</th>
                                    <th style="text-align: center">Descripsi</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Gambar</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotels as $hotel )
                                <tr>
                                    <td style="text-align: center">{{$hotel->nama_hotel}}</td>
                                    <td style="text-align: center">{{$hotel->lokasi}}</td>
                                    <td style="text-align: center">{{$hotel->harga}}</td>
                                    <td style="text-align: center">{{$hotel->description}}</td>
                                    <td style="text-align: center">
                                        @foreach ($hotel->images as $image)
                                        <img src="/storage/{{$image->image_url}}" style="width:70px; height: 70px; object-fit: cover; border:1px solid black;" alt="" data-toggle="modal" data-target="#myModalgambar{{$image->hotel_id}}" />
                                        @endforeach
                                    </td>
                                    </td>
                                    <td style="text-align: center">
                                        <button class="btn btn-outline-warning" onclick="window.location.href='/edit-hotel/{{ $hotel->id }}'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <form action="{{ route('hotel.hapus', $hotel->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>

                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        @endsection