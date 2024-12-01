@extends('auth.index')
@section('content')
<head>
    {{-- <title>Saliz - Register</title> --}}
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/error/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/error/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('assets/error/assets/img/logo-no-backgroundicon1.png')}}" alt="">
                  <span class="d-none d-lg-block">Saliz</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form method="POST" action="{{ Route('login_post')}}">
                    @csrf
                  {{-- <form class="row g-3 needs-validation" novalidate> --}}

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="yourEmail">
                        @error('email')
                        <span style="color: red">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword">
                      @error('password')
                      <span style="color: red">
                        {{$message}}
                    </span>
                      @enderror
                    </div>

                    {{-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> --}}
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register">Create an account</a></p>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">forget your password? <a href="forget_password">Reset your password</a></p>
                      </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/error/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/error/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/error/assets/js/main.js')}}"></script>

</body>

</html>
@endsection
