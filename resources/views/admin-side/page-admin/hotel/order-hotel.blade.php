<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelola Pemesanan Hotel/title>
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
                    <li class="breadcrumb-item active">Kelola Pemesanan Hotel</li>
                </ol>
                <div class="col-3">
                    <a href="{{ url('/tambah-hotel') }}">
                        <!-- <button class="btn btn-outline-success">Tambah Hotel</button> -->
                    </a>
                </div>
                </br>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Pemesanan Hotel
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <!-- <th style="text-align: center">Nama Hotel</th> -->
                                    <th style="text-align: center">Jumlah Hari</th>
                                    <th style="text-align: center">Check In</th>
                                    <th style="text-align: center">Check Out</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemesanan_hotels as $pemesanan_hotel)
                                <tr>
                                    <!-- <td style="text-align: center">{{$pemesanan_hotel->nama_hotel}}</td> -->
                                    <td style="text-align: center">{{$pemesanan_hotel->night_count}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->check_out}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->check_in}}</td>
                                    <td style="text-align: center">{{$pemesanan_hotel->total_cost}}</td>
                                    <td style="text-align: center">
                                        <div class="d-flex justify-content-center">

                                            <div class="btn-group" role="group">
                                                <button class="btn btn-info mx-2" onclick="window.location.href='#'"><i class="fa fa-eye" aria-hidden="true"></i> View Details</button>
                                                <form action="#" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="pemesanan_hotel_id" value="#">
                                                    <button class="btn btn-warning mx-2" type="button" data-bs-toggle="modal" data-bs-target="#confirmPendingModal"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <span id="pendingBtnText">Pending</span>
                                                    </button>
                                                </form>
                                                <form action="#" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger mx-2" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </div>


                                            <!-- Confirm Pending Modal -->
                                            <div class="modal fade" id="confirmPendingModal" tabindex="-1" aria-labelledby="confirmPendingModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmPendingModalLabel">Confirm Pending Status Change</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to change the status to <strong>Accepted</strong>?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-warning" onclick="handlePendingStatusChange()"><i class="fa fa-pencil" aria-hidden="true"></i> Change Status</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Accept Notification Toast -->
                                            <div class="position-fixed bottom-0 end-0 p-3">
                                                <div id="acceptToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-header">
                                                        <strong class="me-auto">Status Updated</strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        The hotel status has been updated to <strong>Accepted</strong>.
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function handlePendingStatusChange() {
                                                    // Submit the form
                                                    document.forms[0].submit();

                                                    // Change the button text and class to 'Accepted'
                                                    var pendingBtnText = document.getElementById('pendingBtnText');
                                                    pendingBtnText.innerHTML = 'Accepted';
                                                    var pendingBtn = pendingBtnText.parentNode;
                                                    pendingBtn.classList.remove('btn-warning');
                                                    pendingBtn.classList.add('btn-success');

                                                    // Show the accept notification toast
                                                    var acceptToast = document.getElementById('acceptToast');
                                                    var toast = new bootstrap.Toast(acceptToast);
                                                    toast.show();
                                                }
                                            </script>


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