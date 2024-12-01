@extends('index')
@section('content')
<head>
    <div class="page-nav">
        <div class="container">
            {{-- <div class="row"> --}}
                <h2> Saliz Clinic</h2>
                <ul>
                    <li> <a href="localhost:8000"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Appointment</li>
                </ul>
            </div>
        </div>
    </div>
  {{-- <title>Saliz - Register</title> --}}
  <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />

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
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                    <form method="POST" action="{{ Route('appointment_post')}}">
                        @csrf
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Book an Appointment</h5>
                    <p class="text-center small">Enter your personal details:</p>
                  </div>

                  {{-- @if (Session::has('success'))
                  <span style="color: green">
                  {!! Session::get('success') !!}
                  </span>
                  @endif --}}

                  {{-- <form class="row g-3 needs-validation" novalidate> --}}
                    <div class="col-12">
                      <label for="yourName" class="form-label">Full Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Your Name" id="yourName">
                    @error('name')
                <span style="color: red">
                    {{$message}}
                </span>
                @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
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
                      <div class="input-group">
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
                        <label for="inputDate" class="form-label">Date</label>
                        <div class="input-group">
                          <input type="date" name="date" class="form-control" id="date">
                        </div>
                        @error('date')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                      </div>

                      <div class="col-12">
                        <label for="inputTime" class="form-label">Time</label>
                        <div class="input-group">
                          <input type="time" name="time" class="form-control" id="time">
                        @error('time')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                      </div>
                    </div>

                      <div class="col-12">
                        <label for="inputconsultant" class="form-label">Select</label>
                        <div class="input-group">
                          <select class="form-select" aria-label="Default select example">
                                    <option value="">Chose the doctor</option>
                                    @foreach ($consultant as $consultant)
                                        <option value="{{ $consultant->id}}">{{ $consultant->name}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('consultant_id')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                      </div>
                        </div>

                        <div class="col-12">
                            <label for="inputTopic" class="form-label">Select</label>
                            <div class="input-group">
                              <select class="form-select" aria-label="Default select example">
                                        <option value="">Chose the Topic</option>
                                           @foreach ($topic as $topic)
                                           <option value="{{$topic->id}}">{{$topic->title}}</option>
                                           @endforeach
                                    </select>
                                </label>
</div>
                        @error('topic_id')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                      </div>
</div>
<div class="col-12">
    <div class="input-group">
        <a href="{{route('checkout')}}"><button type="submit" class="btn btn-primary">send Form</button></a>
    </div>
  </div>

                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->

</body>

</html>
@endsection
