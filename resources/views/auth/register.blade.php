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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form method="POST" action="{{ Route('register_post')}}">
                    @csrf
                  {{-- <form class="row g-3 needs-validation" novalidate> --}}
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Your Name" id="yourName">
                      {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                       @error('name')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" placeholder="***@gmail.com" id="yourEmail">
                      {{-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> --}}
                       @error('email')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPhoneNumber" class="form-label">Phone</label>
                      <div class="input-group has-validation">
                        <input type="string" name="phone" class="form-control" placeholder="09123456789" id="yourPhoneNumber">
                        {{-- <div class="invalid-feedback">Please enter your phone number.</div> --}}
                      </div>
                      @error('phone')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                    </div>

                    <div class="col-12">
                        <label for="retryPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" id="yourPassword">
                        {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                         @error('password')
                      <span style="color: red">
                          {{$message}}
                      </span>
                      @enderror
                      </div>


                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Retry Password</label>
                      <input type="password" name="retryPassword" class="form-control" placeholder="Re Enter Your Password" id="yourPassword" >
                      {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                      @error('retryPassword')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                    </div>

                    {{-- <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              First radio
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                              Second radio
                            </label>
                          </div>
                        </div>
                      </fieldset> --}}


                    {{-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div> --}}

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
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
