@extends('index')
@section('content')
<head>
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2> Saliz Clinic</h2>
                <ul>
                    <li> <a href="localhost:8000"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Profile</li>
                </ul>
            </div>
        </div>
    </div>
  <title>Our Team | Saliz </title>
  <!-- Vendor CSS Files -->
  {{-- <link href="{{asset('assets/error/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets/error/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/error/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />

</head>

<body>

  <!-- ======= Header ======= --><!-- End Header -->
  <!-- ======= Sidebar ======= --><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
    {{-- </div> --}}
    <!-- End Page Title -->

    <section class="section profile">
        <div class="col-xl-4">
         </div>
         <div class="col-xl-8">

          <div class="card">
             <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                {{-- <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li> --}}

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#history">History</button>
                  </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="{{ route('dashboard_edit') }}">
                    @csrf
                    <div class="row mb-3">
                      <label for="Name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Name" type="text" class="form-control" id="fullName" value="{{ $client->name }}">
                        @error('name')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>

                    {{-- <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div> --}}

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="{{$client->phone}}">
                        @error('phone')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{$client->email}}">
                        @error('email')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                    </div>

                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
                </div>
                <div class="tab-pane fade pt-3" id="history">
                <form method="post" action="{{ route('dashboard_edit') }}">
                    @csrf
                    <div class="row mb-3">
                      <label for="Date" class="col-md-4 col-lg-3 col-form-label">Date and Time</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Datetime" type="datetime" class="form-control" id="datetime" value="{{ $client->name }}">
                        @error('name')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>

                    {{-- <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div> --}}

                    <div class="row mb-3">
                      <label for="Name" class="col-md-4 col-lg-3 col-form-label">Consultant`s Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="Phone" value="{{$client->phone}}">
                        @error('phone')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Topic" class="col-md-4 col-lg-3 col-form-label">Topic</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="topic" type="text" class="form-control" id="topic" value="{{$client->email}}">
                        @error('email')
                      <div class="form-text" style="color: red">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="Result" class="col-md-4 col-lg-3 col-form-label">Result</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="result" type="text" class="form-control" id="result" value="{{$client->email}}">
                          @error('email')
                        <div class="form-text" style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= --><!-- End Footer -->

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
