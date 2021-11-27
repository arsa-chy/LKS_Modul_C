<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link rel="icon" href="{{ asset('images/icons-cart.png') }}" type="image/x-icon">

</head>

<body id="page-top">

    <header>
        <!-- Fixed Navbar -->
        <nav class="navbar navbar-dark bg-dark">

            <a class="navbar-brand mr-1" href="/">My Shop</a>

            @auth
            <p id="toggle-profile">{{ Auth::user()->nama }}</p>

            <div id="cart-profile" hidden>
                <a href="{{ route('user.profile') }}" id="profile">Profile</a>
                <form action="{{ route('user.logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
            @endauth
        </nav>
    </header>

    {{-- <!-- Sidebar -->
    @include('templates.sidebar') --}}

    <main role="main">
      <div id="content-wrapper">

        @yield('content')

        </div>
        <!-- /.content-wrapper -->
    </main>

    <!-- Sticky Footer -->
    @include('templates.footer')


  <script>
      $('#toggle-profile').click(function (e) { 
      e.preventDefault();
      $('#cart-profile').css('display', 'block');
    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

</body>

</html>
