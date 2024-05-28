<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- daterange picker -->
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
                        <h4 class="pt-2 ">Hi, {{auth()->user()->name}} silahkan isikan data nya yah..</h4>
                        <p>Jika sudah lengkap, jangan lupa untuk akses http://127.0.0.1:8000/undanganku/namatamu/alamat 
                        <br>Untuk Lihat Undangan, Kemudian Share Link Tersebut Kepada Tamu 
                        <br>NOTE : Nama Tamu & Alamat isikan Nama Orang & Alamat Orang yang kamu undang yah</p>
                        </div><!-- /.row -->
                    </div>
                    <h4>Data Pengantin</h4>
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
</body>

</html>