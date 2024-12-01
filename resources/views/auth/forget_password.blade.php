@extends('auth.index')
@section('content')

<link href="{{asset('assets/error/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/error/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/error/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/forget.css')}}" rel="stylesheet">


<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">

                    @if (Session::has('success'))
                    <span style="color: green">
                    {!! Session::get('success') !!}
                    </span>
                    @endif

                    <form method="post" action="{{route('Forget_password')}}">
                        @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="***@email.com" class="form-control"  type="email">
                        </div>
                        @error('email')
                        <span style="color: red">
                            {{$message}}
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>

                      <input type="hidden" class="hide" name="token" id="token" value="">
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</div>
          </section>

</div>
@endsection
