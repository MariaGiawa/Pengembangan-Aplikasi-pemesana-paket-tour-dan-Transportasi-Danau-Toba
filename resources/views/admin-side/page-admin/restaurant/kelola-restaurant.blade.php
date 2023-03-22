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
                <h1 class="mt-4">Selamat Datang,</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Kelola restaurant</li>
                </ol>
                <div class="col-3">
                    <a href="{{ url('/tambah-restaurant') }}">
                        <button class="btn btn-outline-success">Tambah restaurant</button>
                    </a>
                </div>
                </br>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel restaurant
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Nama restaurant</th>
                                    <th style="text-align: center">Lokasi</th>
                                    <th style="text-align: center">Descripsi</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Gambar</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurants as $restaurant )
                                <tr>
                                    <td style="text-align: center">{{$restaurant->nama_restaurant}}</td>
                                    <td style="text-align: center">{{$restaurant->lokasi}}</td>
                                    <td style="text-align: center">{{$restaurant->harga}}</td>
                                    <td style="text-align: center">{{$restaurant->description}}</td>
                                    <td style="text-align: center">
                                        @foreach($restaurant->images as $image)
                                        <img src="{{ asset('storage/restaurant/' . $image->images) }}" style="width:70px; height: 70px; object-fit: cover; border:1px solid black;" alt="" data-toggle="modal" data-target="#myModalgambar{{$image->restaurant_id}}">
                                        @endforeach

                                    </td>
                                    </td>
                                    <td style="text-align: center">
                                        <button class="btn btn-outline-warning" onclick="window.location.href='/edit-restaurant/{{ $restaurant->id }}'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button class="btn btn-outline-danger" onclick="window.location.href='/delete/{{ $restaurant->id }}'"><i class="fa fa-trash" aria-hidden="true"></i></button>
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