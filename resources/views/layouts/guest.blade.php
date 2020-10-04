<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container mt-2">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        @if(Auth::user() != null)
        <a href="#" data-toggle="modal" data-target="#logoutModal">{{ Auth::user()->name }}</a>
        @else
        <a class="nav-link" href="{{ route('login') }}">Login</a>
        @endif
      </li>
    </ul>
  </div>
  <hr>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('img/logo.png') }}" alt="" srcset="" class="img-fluid">
      </div>
      <div class="col-8">
        <form action="" method="get">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari berdasarkan nama" aria-label="Cari berdasarkan nama" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fa fa-search"></i> Cari</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-2">
        <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Keranjang</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-success justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/allbook') }}">Semua Buku</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form class="inline-form" action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary" title="Hapus">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
      <span class="text-muted"><script>document.write(new Date().getFullYear())</script> All Rights Reserved By &copy; Me</span>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>