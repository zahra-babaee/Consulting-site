@extends('index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->



<div class="row contact-rooo no-margin">
<div class="container">
<div class="row">



<div style="padding:20px" class="col-sm-6">

    @if (Session::has('success'))
    <span style="color: green">
    {!! Session::get('success') !!}
    </span>
    @endif

    <form method="POST" action="{{ Route('contact_post')}}">
        @csrf
        <h2 style="font-size:18px">Contact Form</h2>
 <div class="row">
     <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
     <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  >
        @error('name')
        <span style="color: red">
           {{$message}}
        </span>
        @enderror
    </div>
 </div>
 <div style="margin-top:10px;" class="row">
     <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
     <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  >
        @error('email')
     <span style="color: red">
        {{$message}}
     </span>
     @enderror
    </div>
 </div>
  <div style="margin-top:10px;" class="row">
     <div style="padding-top:10px;" class="col-sm-3"><label>Enter  Message:</label></div>
     <div class="col-sm-8">
       <textarea rows="5" name="description" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
       @error('description')
       <span style="color: red">
          {{$message}}
       </span>
       @enderror
     </div>
 </div>
  <div style="margin-top:10px;" class="row">
     <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
     <div class="col-sm-8">
      <button class="btn btn-success btn-sm" type="submit" >Send Message</button>
     </div>
 </div>
    </form>
</div>
{{-- <div class="col-sm-6">

   <div style="margin:50px" class="serv">





<h2 style="margin-top:10px;">Address</h2>

Smart Eye <br>
Marthandam<br>
K.K District<br>
Phone:{{setting('contact.phone')}}<br>
Email:info@smart-eye.in<br>
Website:www.smart-eye.com<br>







</div>


</div>

</div> --}}
</div>

</div>
@endsection
