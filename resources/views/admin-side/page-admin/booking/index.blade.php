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
                  <th>Nama Paket Tour</th>
                  <th>email</th>
                  <th>No Telepon</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bookings as $booking)
                <tr>
                  <td>{{ $booking->nama }}</td>
                  <td>{{ $booking->email }}</td>
                  <td>{{ $booking->telepon }}</td>
                  <td>{{ $booking->tanggal }}</td>
                  <td>
                    @if ($booking->status === 'pending')
                    <span class="badge bg-warning text-dark">{{ $booking->status }}</span>
                    @elseif ($booking->status === 'accepted')
                    <span class="badge bg-success">{{ $booking->status }}</span>
                    @elseif ($booking->status === 'rejected')
                    <span class="badge bg-danger">{{ $booking->status }}</span>
                    @endif
                  </td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-outline-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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