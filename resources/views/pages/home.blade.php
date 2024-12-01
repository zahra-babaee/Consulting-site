@extends('index')

@section('content')


<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <div class="slider-img">
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title" dir="rtl" align="right">راهنمای شما در زندگی</h1>
                                <p class="slider-text hidden-xs" dir="rtl" align="right"نوبت بگیرید>ما می خواهیم به شما کمک کنیم تا به بهترین شکل ممکن زندگی کنید. با ما در ارتباط باشید و از خدمات مشاوره ای ما استفاده کنید.</p>
                                <a href="/appointment" class="btn btn-success hidden-xs">نوبت بگیرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <h1 class="slider-title" dir="rtl" align="right">ما در کنار شما هستیم</h1>
                            <p class="slider-text hidden-xs" dir="rtl" align="right">هر چالشی که در زندگی با آن روبرو هستید، ما اینجا هستیم تا به شما کمک کنیم. با ما در ارتباط باشید و بهترین راه حل ها را برای مشکلات خود بیابید.</p>
                            <a href="/appointment" class="btn btn-success hidden-xs">نوبت بگیرید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"> <img src="assets/images/slider/slider-3.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <h1 class="slider-title" dir="rtl" align="right">مشاوره حرفه ای، فقط یک کلیک فاصله دارد</h1>
                            <p class="slider-text hidden-xs" dir="rtl" align="right">با استفاده از سایت ما، شما می توانید به راحتی با مشاوران حرفه ای ما در ارتباط باشید و از خدمات مشاوره ای ما بهره مند شوید.</p>
                            <a href="/ourteam" class="btn btn-success hidden-xs">با پزشکان و مشاوران ما آشنا شوید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="our-blog container-fluid">
      <div class="container">
      <div class="session-title row">
          <h2 dir="rtl" align="right">مشاوره در دسترس شما</h2>
          <p dir="rtl" align="right"> ما فرصتی را فراهم آورده ایم تا شما بتوانید با خیال راحت و در محیط امن و راحت خود، به مشاوره نیاز داشته باشید.</p>
      
  </section>

  <!-- ################# Doctors Message Starts Here#######################--->


{{-- <div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-12 doc-img">
                    <img  src="assets/images/doctt.png" alt="">
                </div>
                <div class="col-md-6 col-sm-12 doc-det">
                    <h2>Hello, I’m Doctor Sanjay</h2>
                    <span>Expert Clinical Psychologist in Manhattan</span>

                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                    <h4>Call me on : +123 98 8887</h4>
                </div>
            </div>
        </div>

    </div>

</div> --}}

      <!-- ################# Mission Vision Starts Here#######################--->

      <div class="mosion-vision">
        <div class="container">
        <div class="row">
           <div class="col-lg-4 col-md-12">
               <div class="single-dd">
                <h4 dir="rtl" align="right">چرا ما؟</h4>
                <p dir="rtl" align="right">ما در اینجا هستیم تا به شما کمک کنیم تا به بهترین شکل ممکن با چالش های زندگی مواجه شوید. ما با استفاده از تکنولوژی های مدرن، مشاوره را به خانه شما می آوریم. شما می توانید با ما در هر زمان و از هر کجا که هستید، تماس بگیرید. </p>



               </div>
           </div>
           <div class="col-lg-4 col-md-12">
                <div class="single-dd">
                    <h4 dir="rtl" align="right">ماموریت ما</h4>
                    <p dir="rtl" align="right">ماموریت ما این است که به شما کمک کنیم تا به بهترین نسخه خود تبدیل شوید. ما می خواهیم شما را در فرآیند رشد و توسعه خود یاری کنیم و به شما امکان دهیم تا با اعتماد به نفس به هدف های خود برسید.</p>



               </div>
           </div>
           <div class="col-lg-4 col-md-12">
                <div class="single-dd">
                    <h4 dir="rtl" align="right">تیم ما</h4>
                    <p dir="rtl" align="right">تیم ما شامل مشاوران حرفه ای است که در زمینه های مختلف تحصیل کرده اند. هر یک از مشاوران ما دارای تجربیات و دانش فراوانی هستند و آماده اند تا به شما در راه یافتن به راه حل های مناسب کمک کنند. <br>با ما همراه شوید و به بهترین نسخه خود تبدیل شوید. ما منتظر شما هستیم. </p>

               </div>
           </div>
        </div>
 <!-- ################# Our Session Starts Here#######################--->

  <section class="sesion-type">
      <div class="container">
         <div class="session-title row">
          <h2 dir="rtl" align="right">خدمات ما</h2>
          <p dir="rtl" align="right">در سایت مشاوره آنلاین ما، ما به شما کمک می کنیم تا به بهترین نتیجه برسید. خدمات ما شامل:</p>
      </div>
          <div class="row">
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess">
                      <img src="assets/images/session/therapy-1.jpg" alt="">
                      <p dir="rtl" align="right">مشاوره فردی</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess">
                      <img src="assets/images/session/therapy-2.jpg" alt="">
                      <p dir="rtl" align="right">مشاوره خانواده و ازدواج</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess">
                      <img src="assets/images/session/therapy-3.jpg" alt="">
                      <p dir="rtl" align="right">مشاوره تحصیلی</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess">
                      <img src="assets/images/session/therapy-4.jpg" alt="">
                      <p dir="rtl" align="right">مشاوره گروهی</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess">
                      <img src="assets/images/session/therapy-5.jpg" alt="">
                      <p dir="rtl" align="right">مشاوره کاری و شغلی</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-sess sess-ok">
                     <h4>اولین قدم را برای خود بردارید</h4>
                      <p>با ما همراه باشید تا بهترین خدمات مشاوره را دریافت کنید</p>

                      <button>  <a href="/appointment" class="btn btn-success">نوبت بگیرید</a></button>
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection
