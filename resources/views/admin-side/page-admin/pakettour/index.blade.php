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
                    <li class="breadcrumb-item active">Kelola Tour</li>
                </ol>
                <div class="col-3">
                    <a href="{{ route('paket-tour.create') }}">
                        <button class="btn btn-outline-success">Tambah Tour</button>
                    </a>
                </div>
                </br>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Tour
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Tour</th>
                                    <th>Diskon</th>
                                    <th>Harga</th>
                                    <th>Jumlah Orang</th>
                                    <th>Jumlah Hari</th>
                                    <th>Harga total</th>
                                    <th>Detail</th>
                                    <th>Images</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakettours as $pakettour )
                                <tr>
                                    <td>{{ $pakettour->nama }}</td>
                                    <td>{{ $pakettour->diskon }}</td>
                                    <td>{{ $pakettour->harga }}</td>
                                    <td>{{ $pakettour->jumlahorang }}</td>
                                    <td>{{ $pakettour->jumlah_hari }}</td>
                                    <td>{{ $pakettour->hargatotal }}</td>
                                    <td>{{ $pakettour->detail }}</td>
                                    <td>

                                        <img src="/public/tour/{{ $pakettour->image }}" style="width:70px; height: 70px; object-fit: cover; border:1px solid black;" alt="" data-toggle="modal" data-target="#myModalgambar{{$pakettour->image}}" />
                                    </td>
                                    <td>
                                        <a href="{{ route('paket-tour.edit', $pakettour->id) }}" class="btn btn-outline-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <form action="{{ route('paket-tour.destroy', $pakettour->id) }}" method="POST">
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
                @if($errors->any())
                <div class="mb-3">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
            </div>
        </main>
        @endsection