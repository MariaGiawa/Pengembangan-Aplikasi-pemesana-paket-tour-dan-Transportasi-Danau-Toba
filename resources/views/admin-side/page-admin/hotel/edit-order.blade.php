<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <title>Validasi Pemesanan</title>
 <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
 <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
 <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
 @include('admin-side.template.header')
 <div id="layoutSidenav_content">
  <main>
   <div class="container-fluid px-4">
    <h2 class="mt-4">Selamat Datang, {{Auth::user()->name}}</h2>
    <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">Edit Status Pemesanan</li>
    </ol>
    <form action="{{ route('pemesanan_hotel.update', $pemesanan) }}" method="POST" enctype="multipart/form-data">
     @csrf <!-- Add this line to include the CSRF token -->
    
     <!-- 2 column grid layout with text inputs for the first and last names -->
     <div class="col">
      <div class="form-outline">
       <label class="form-label" for="form6Example2">Status Validasi</label>
       <select class="form-control" aria-label="Default select example" name="status">
        <option selected disabled>Pilih Validasi Pesanan</option>
        <option value="pending">PENDING</option>
        <option value="rejected">TOLAK</option>
        <option value="accepted">DISETUJUI</option>
       </select>
      </div>
     </div>
     <br>
     <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>
    </form>

   </div>
  </main>
  @include('admin-side.template.footer')