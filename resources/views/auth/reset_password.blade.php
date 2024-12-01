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

    <form >
        {{-- @csrf --}}
        <div class="row mb-3">
            <input name="link" value="{{$link}}" type="hidden">

            <label for="newPassword" class="form-label">New Password</label>
            <input type="newpassword" name="password" class="form-control" id="newPassword">
            {{-- @error('password')
            <span style="color: red">
                {{$message}}
            </span>
            @enderror --}}
        </div>
      </div>

      <div class="row mb-3">
        <label for="renewPassword" class="form-label">Re-enter New Password</label>
          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
          {{-- @error('retryPassword')
          <span style="color: red">
              {{$message}}
          </span>
          @enderror --}}
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>
      </div>

    </form><!-- End Change Password Form -->
</div>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
