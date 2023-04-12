<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelola Transportation</title>
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
                    <li class="breadcrumb-item active">Kelola Transportation</li>
                </ol>
                <div class="col-3">
                    <a href="{{ url('transportations.create') }}">
                        <button class="btn btn-outline-success">Tambah Transportation</button>
                    </a>
                </div>
                </br>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Tranportation
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Tranportation</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Route</th>
                                    <th>Location</th>
                                    <th>Duration</th>
                                    <th>Images</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakettourss as $transportation )
                                <tr>
                                    <td>{{ $pakettours->name }}</td>
                                    <td>{{ $pakettours->type }}</td>
                                    <td>{{ $pakettours->price }}</td>
                                    <td>{{ $pakettours->route }}</td>
                                    <td>{{ $pakettours->location }}</td>
                                    <td>{{ $pakettours->duration }}</td>
                                    <td>
                                        @foreach ($pakettours->images as $image)
                                        <img src="/storage/{{ $image->image_url }}" style="width:70px; height: 70px; object-fit: cover; border:1px solid black;" alt="" data-toggle="modal" data-target="#myModalgambar{{$image->hotel_id}}" />
                                        @endforeach
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-warning" onclick="window.location.href='/edit-hotel/{{ $hotel->id }}'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button class="btn btn-outline-danger" onclick="window.location.href='/delete/{{ $hotel->id }}'"><i class="fa fa-trash" aria-hidden="true"></i></button>
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