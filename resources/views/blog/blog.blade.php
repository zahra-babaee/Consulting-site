@extends('index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Saliz Clinic</h2>
            <ul>
                <li> <a href="localhost:8000"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Blogs </li>
            </ul>
        </div>
    </div>
</div>
<section class="our-blog container-fluid">
    <div class="container">
    <div class="col-sm-12 blog-cont">
       <div class="row no-margin">
<!-- ######## Page  Title End ####### -->
@foreach ($blogs as $Blogs)
           <div class="col-sm-6 blog-smk">
             <div class="blog-single">

                     <img src="{{ Voyager::image($Blogs->image) }}" alt="">

                 <div class="blog-single-det">
                     <span>{{$Blogs->created_at}}</span>
                     <h6>{{ $Blogs->title}}</h6>
                     {{-- <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p> --}}
                     <a href="{{route('blog_single' , $Blogs->slug)}}">

                         <button class="btn btn-success btn-sm">More Detail</button>
                     </a>
                 </div>
             </div>
         </div>
@endforeach
@if (count($blogs)<1)
<h2>
    There is NO Blogs Yet!
</h2>

@endif

   </div>

</div>
</section>
@endsection
