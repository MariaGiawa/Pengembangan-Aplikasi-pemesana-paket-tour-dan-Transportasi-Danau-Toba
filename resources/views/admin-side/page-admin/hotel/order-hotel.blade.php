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
    <style>
        .btn {
            margin-right: 5px;
        }
    </style>
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
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Tour
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Jumlah Hari</th>
                                    <th style="text-align: center">Check In</th>
                                    <th style="text-align: center">Check Out</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemesanan_hotels as $pemesanan_hotel)
                                <tr>
                                    <td style="text-align: center">{{$pemesanan_hotel->night_count}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->check_out}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->check_in}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->total_cost}}</td>
                                    <td>
                                        @if ($pemesanan_hotel->status === 'pending')
                                        <span class="badge bg-warning text-dark">{{ $pemesanan_hotel->status }}</span>
                                        @elseif ($pemesanan_hotel->status === 'accepted')
                                        <span class="badge bg-success">{{ $pemesanan_hotel->status }}</span>
                                        @elseif ($pemesanan_hotel->status === 'rejected')
                                        <span class="badge bg-danger">{{ $pemesanan_hotel->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('pemesanan_hotel.edit', $pemesanan_hotel->id) }}" class="btn btn-outline-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <form action="{{ route('pemesanan_hotel.destroy', $pemesanan_hotel->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        function confirmDelete() {
                            if (confirm("Apakah Anda yakin ingin menghapus data?")) {
                                document.getElementById('delete-form').submit();
                                return true;
                            } else {
                                return false;
                            }
                        }
                    </script>
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