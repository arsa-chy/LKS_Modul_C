<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link rel="icon" href="{{ asset('images/icons-cart.png') }}" type="image/x-icon">

</head>

<body id="page-top">

    <header>
        <!-- Fixed Navbar -->
        @include('templates.navbar')
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

  {{-- <script>
      $('#toggle-profile').click(function (e) { 
      e.preventDefault();
      $('#cart-profile').css('display', 'block');
    });
  </script> --}}

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin.min.js') }}"></script>

</body>

</html>
