<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pengantin</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
    <!--  picker -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('baackend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('baackend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Bagian Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fas fa-user"> {{auth()->user()->name}}</i>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset('baackend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Buku Tamu Digital</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                    
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-header">MASTER</li>
                        <li class="nav-item">
                            <a href="{{ route('home')}}" class="nav-link">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p>
                                Beranda
                                <span class="badge badge-info right"></span>
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('scan') }}" class="nav-link">
                                <i class="nav-icon fas fa-qrcode"></i>
                                <p>
                                    Scan QR Code
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>   
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftarhadir') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Daftar Hadir Tamu
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>    
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('undanganku') }}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Undangan Ku
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.row -->
                    </div>
                    <h4>Data Pengantin</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalpengantin">Data Pengantin <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Pengantin-->
                    <div class="modal fade" id="modalpengantin">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Data Pengantin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Pengantin Pria</h6>
                                        <input type="text" class="form-control" id="nama_pria" name="nama_pria" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="col-4">
                                    <h6>Pengantin Wanita</h6>
                                        <input type="text" class="form-control" id="nama_wanita" name="nama_wanita" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <h6>Nama Ayah Pria</h6>
                                        <input type="text" class="form-control" id="nama_ayah_pria" name="nama_ayah_pria" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="col-4">
                                    <h6>Nama Ayah Wanita</h6>
                                        <input type="text" class="form-control" id="nama_ayah_wanita" name="nama_ayah_wanita" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <h6>Nama Ibu Pria</h6>
                                        <input type="text" class="form-control" id="nama_ibu_pria" name="nama_ibu_pria" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="col-4">
                                    <h6>Nama Ibu Wanita</h6>
                                        <input type="text" class="form-control" id="nama_ibu_wanita" name="nama_ibu_wanita" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <h6>Story Pria</h6>
                                    <textarea type="text" class="form-control" id="story_pria" name="story_pria" rows="3" placeholder="Story Singkat"></textarea>
                                    </div>
                                    <div class="col-4">
                                    <h6>Story Wanita</h6>
                                    <textarea type="text" class="form-control" id="story_wanita" name="story_wanita" rows="3" placeholder="Story Singkat"></textarea>
                                    </div>
                                </div>
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Pengantin -->

                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengantin</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama_pria']}}</td>
                        <td>{{$item['nama_ayah_pria']}}</td>
                        <td>{{$item['nama_ibu_pria']}}</td>
                      </tr>
                      <tr>
                        <td>{{$no+2}}</td>
                        <td>{{$item['nama_wanita']}}</td>
                        <td>{{$item['nama_ayah_wanita']}}</td>
                        <td>{{$item['nama_ibu_wanita']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                    <h4>Informasi Acara</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalinfo">Informasi Acara <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data info-->
                    <div class="modal fade" id="modalinfo">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Informasi Acara</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_info') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <label>Akad</label>
                                        <div class="input-group date" id="akad" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#akad" id="akad" name="akad">
                                            <div class="input-group-append" data-target="#akad" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col-4">
                                    <label>Resepsi</label>
                                        <div class="input-group date" id="resepsi" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#resepsi" id="resepsi" name="resepsi">
                                            <div class="input-group-append" data-target="#resepsi" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <h6>Tempat</h6>
                                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat">
                                    </div>
                                    <div class="col-4">
                                    <h6>Waktu Akad</h6>
                                        <input type="text" class="form-control" id="pukul_akad" name="pukul_akad" placeholder="08.00 - Selesai">
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                    <h6>Waktu Resepsi</h6>
                                        <input type="text" class="form-control" id="pukul_resepsi" name="pukul_resepsi" placeholder="08.00 - Selesai">
                                    </div>
                                </div>
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Info -->

                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Akad Nikah</th>
                        <th scope="col">Resepsi</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Waktu Akad</th>
                        <th scope="col">Waktu Resepsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($info as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['akad']}}</td>
                        <td>{{$item['resepsi']}}</td>
                        <td>{{$item['tempat']}}</td>
                        <td>{{$item['pukul_akad']}}</td>
                        <td>{{$item['pukul_resepsi']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    
                    <h4>Story Pengantin</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalstory">Story Pengantin <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Story-->
                    <div class="modal fade" id="modalstory">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Story Pengantin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_story') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Awal Kenal</h6>
                                        <textarea type="text" class="form-control" id="kenal" name="kenal" rows="3" placeholder="Story Awal Kenal"></textarea>
                                    </div>
                                    <div class="col-4">
                                        <h6>Mulai Dekat</h6>
                                        <textarea type="text" class="form-control" id="dekat" name="dekat" rows="3" placeholder="Story Mulai Dekat"></textarea>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Mulai Berpacaran</h6>
                                        <textarea type="text" class="form-control" id="pacaran" name="pacaran" rows="3" placeholder="Story Mulai Pacaran"></textarea>
                                    </div>
                                    <div class="col-4">
                                        <h6>Menikah</h6>
                                        <textarea type="text" class="form-control" id="menikah" name="menikah" rows="3" placeholder="Story Menikah"></textarea>
                                    </div>
                                </div>
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Story -->

                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Awal Kenal</th>
                        <th scope="col">Mulai Dekat</th>
                        <th scope="col">Berpacaran</th>
                        <th scope="col">Menikah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($story as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['kenal']}}</td>
                        <td>{{$item['dekat']}}</td>
                        <td>{{$item['pacaran']}}</td>
                        <td>{{$item['menikah']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                    <h4>Data Amplop</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalamplop">Amplop <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Amplop-->
                    <div class="modal fade" id="modalamplop">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Masukin Rekening</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_rek') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Nama Bank</h6>
                                        <textarea type="text" class="form-control" id="namabank" name="namabank" rows="3" placeholder="Nama Bank Nya Apa?"></textarea>
                                    </div>
                                    <div class="col-4">
                                        <h6>No Rekening</h6>
                                        <textarea type="text" class="form-control" id="norek" name="norek" rows="3" placeholder="No Rekening Nya Berapa?"></textarea>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Nama Pemilik</h6>
                                        <textarea type="text" class="form-control" id="nama" name="nama" rows="3" placeholder="Punya Siapa?"></textarea>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Nama Bank</h6>
                                        <textarea type="text" class="form-control" id="namabank_b" name="namabank_b" rows="3" placeholder="Nama Bank Nya Apa?"></textarea>
                                    </div>
                                    <div class="col-4">
                                        <h6>No Rekening</h6>
                                        <textarea type="text" class="form-control" id="norek_b" name="norek_b" rows="3" placeholder="No Rekening Nya Berapa?"></textarea>
                                    </div>
                                </div>
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <h6>Nama Pemilik</h6>
                                        <textarea type="text" class="form-control" id="nama_b" name="nama_b" rows="3" placeholder="Punya Siapa?"></textarea>
                                    </div>
                                </div>
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Story -->

                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Nama Bank</th>
                        <th scope="col">No Rekening</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rek as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['namabank']}}</td>
                        <td>{{$item['norek']}}</td>
                      </tr>
                      <tr>
                        <td>{{$no+2}}</td>
                        <td>{{$item['nama_b']}}</td>
                        <td>{{$item['namabank_b']}}</td>
                        <td>{{$item['norek_b']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                    <h4>Upload Foto</h4>
                    <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modalfoto">Upload Foto <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Amplop-->
                    <div class="modal fade" id="modalfoto">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Upload Foto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_foto') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotopria">Pengantin Pria</label>
                                        <input class="form-control @error('fotopria') is-invalid @enderror" type="file" id="fotopria" name="fotopria">
                                        @error('fotopria')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotowanita">Pengantin Wanita</label>
                                        <input type="file" class="form-control @error('fotowanita') is-invalid @enderror" id="fotowanita" name="fotowanita">
                                        @error('fotowanita')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotocerita1">Foto Cerita</label>
                                        <input type="file" class="form-control @error('fotocerita1') is-invalid @enderror" id="fotocerita1" name="fotocerita1">
                                        @error('fotocerita1')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotocerita2">Foto Cerita</label>
                                        <input type="file" class="form-control @error('fotocerita2') is-invalid @enderror" id="fotocerita2" name="fotocerita2">
                                        @error('fotocerita2')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotocerita3">Foto Cerita</label>
                                        <input type="file" class="form-control @error('fotocerita3') is-invalid @enderror" id="fotocerita3" name="fotocerita3">
                                        @error('fotocerita3')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="mb-3">
                                        <label for="fotocerita4">Foto Cerita</label>
                                        <input type="file" class="form-control @error('fotocerita4') is-invalid @enderror" id="fotocerita4" name="fotocerita4">
                                        @error('fotocerita4')
                                        <div class="invalid-feedback">
                                            {{ $message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                    
                                <div class="row pt-4 modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <!-- End Modal Story -->

                    </div>    
                <!-- /.container-fluid -->
                </div>
                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                          <!-- /.control-sidebar -->
                        </div>
                        
                        <!-- ./wrapper -->

                        <!-- jQuery -->
                        <script src="{{ asset('baackend/plugins/jquery/jquery.min.js') }}"></script>
                        <!-- jQuery UI 1.11.4 -->
                        <script src="{{ asset('baackend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
                        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                        <script>
                            $.widget.bridge('uibutton', $.ui.button)
                        </script>
                        <!-- Bootstrap 4 -->
                        <script src="{{ asset('baackend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <!-- ChartJS -->
                        <script src="{{ asset('baackend/plugins/chart.js/Chart.min.js') }}"></script>
                        <!-- Sparkline -->
                        <script src="{{ asset('baackend/plugins/sparklines/sparkline.js') }}"></script>
                        <!-- JQVMap -->
                        <script src="{{ asset('baackend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
                        <script src="{{ asset('baackend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
                        <!-- jQuery Knob Chart -->
                        <script src="{{ asset('baackend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
                        <!-- daterangepicker -->
                        <script src="{{ asset('baackend/plugins/moment/moment.min.js') }}"></script>
                        <script src="{{ asset('baackend/plugins/daterangepicker/daterangepicker.js') }}"></script>
                        <!-- Tempusdominus Bootstrap 4 -->
                        <script src="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
                        <!-- Summernote -->
                        <script src="{{ asset('baackend/plugins/summernote/summernote-bs4.min.js') }}"></script>
                        <!-- overlayScrollbars -->
                        <script src="{{ asset('baackend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
                        <!-- AdminLTE App -->
                        <script src="{{ asset('baackend/dist/js/adminlte.js') }}"></script>
                        <!-- AdminLTE for demo purposes -->
                        <script src="{{ asset('baackend/dist/js/demo.js') }}"></script>
                        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                        <script src="{{ asset('baackend/dist/js/pages/dashboard.js') }}"></script>

                        <script>
                            $(function(){
                                $('#akad').datetimepicker({
                                    format: 'DD/MM/YYYY'
                                });
                                $('#resepsi').datetimepicker({
                                    format: 'DD/MM/YYYY'
                                });
                            })
                        </script>
</body>

</html>
