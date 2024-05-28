<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Undangan</title>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('baackend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('baackend/plugins/summernote/summernote-bs4.min.css')}}">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('baackend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
      <img src="{{ asset('baackend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Buku Tamu Digital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="{{ route('scan')}}" class="nav-link">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Scan QR Code
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('daftarhadir')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Hadir Tamu
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('undanganku')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Undangan Ku
              </p>
            </a>
          </li>--}} 
          <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>Logout</p>
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
    <div class="content-header">
        <section class="content">
          <div class="container-fluid">
            <div class="row pt-5">
              <div class="col-md-5 mx-auto">
                <h1 class="mb-3 text-center">Daftar Undangan</h1>
              </div>
            </div>
          </div>
          <div class="container-fluid mx-auto" style="width: 1000px">
          <a class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#modaltamu">Daftar Undangan <i class="mx-1 fas fa-cloud-download-alt"></i></a>
                    <!--Modal Data Pengantin-->
                    <div class="modal fade" id="modaltamu">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title text-center">Data Tamu Undangan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('store_dtamu') }}" method="post">
                            @csrf
                            @include('sweetalert::alert')
                                <div class="row g-3 pt-4 justify-content-center">
                                    <div class="col-4">
                                        <label >Nama Tamu</label>
                                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu">
                                    </div>
                                    <div class="col-4">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" id="alamat_tamu" name="alamat_tamu" placeholder="Alamat Tamu">
                                    </div>
                                    <div class="col-4">
                                        <label>No Telp</label>
                                        <input type="text" class="form-control" id="notelp_tamu" name="notelp_tamu" value="62">
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
                    <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Bagikan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($dtamu as $no => $item)
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$item['nama_tamu']}}</td>
                        <td>{{$item['alamat_tamu']}}</td>
                        <td>{{$item['notelp_tamu']}}</td>
                        <td><a href="https://wa.me/{{$item->notelp_tamu}}?text=Assalamualaikum warahmatullahi wabarakatuh. Yth. {{$item->nama_tamu}} 


                            Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami {{$pengantin->nama_pria}} dan {{$pengantin->nama_wanita}}

                            Berikut adalah link undangan kami, untuk info selengkapnya dari acara silahkan kunjungi : https://yasproject.my.id/undanganku/{{$item->nama_tamu}}/{{$item->alamat_tamu}} 

                            
                            Jangan lupa yah untuk menunjukkan QR-Code yang ada pada undangan kepada panitia untuk mengisi daftar hadir. 

                            
                            Terukir kesan yang dalam dihati kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk mengiringi, dan memberikan doa restu kepada kami dalam menapaki lembaran baru perjalanan hidup.

                            
                            Terima kasih banyak atas perhatiannya. Wassalamu'alaikum Wr. Wb." class="btn btn-success">Bagikan <i class="mx-1 fab fa-whatsapp"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
        </section>
    </div>        
  </div>        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>  
<!-- ./wrapper -->
</body>
          <!-- INI JQUERY TEMA ADMIN LTE -->
    <script src="{{ asset('baackend/plugins/jquery/jquery.min.js')}}"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="{{ asset('baackend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge('uibutton', $.ui.button)
          </script>
          <!-- Bootstrap 4 -->
          <script src="{{ asset('baackend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <!-- ChartJS -->
          <script src="{{ asset('baackend/plugins/chart.js/Chart.min.js')}}"></script>
          <!-- Sparkline -->
          <script src="{{ asset('baackend/plugins/sparklines/sparkline.js')}}"></script>
          <!-- JQVMap -->
          <script src="{{ asset('baackend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
          <script src="{{ asset('baackend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
          <!-- jQuery Knob Chart -->
          <script src="{{ asset('baackend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
          <!-- daterangepicker -->
          <script src="{{ asset('baackend/plugins/moment/moment.min.js')}}"></script>
          <script src="{{ asset('baackend/plugins/daterangepicker/daterangepicker.js')}}"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="{{ asset('baackend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
          <!-- Summernote -->
          <script src="{{ asset('baackend/plugins/summernote/summernote-bs4.min.js')}}"></script>
          <!-- overlayScrollbars -->
          <script src="{{ asset('baackend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
          <!-- AdminLTE App -->
          <script src="{{ asset('baackend/dist/js/adminlte.js')}}"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="{{ asset('baackend/dist/js/demo.js')}}"></script>
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="{{ asset('baackend/dist/js/pages/dashboard.js')}}"></script>
</html>