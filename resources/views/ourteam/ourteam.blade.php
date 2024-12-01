@extends('index')
@section('content')
<head>
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2> Saliz Clinic</h2>
                <ul>
                    <li> <a href="localhost:8000"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Our Team</li>
                </ul>
            </div>
        </div>
    </div>
  <title>Our Team | Saliz </title>

    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/animations.css')}}" />
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/fontello/css/fontello.css')}}" /> --}}
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.animation.css')}}" /> --}}
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/shortcodes.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.css')}}" />
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom-style.css')}}"/> --}}
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.responsive.css')}}" /> --}}
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom.css')}}"/> --}}
    {{-- <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.messages.css')}}"/> --}}

</head>
<body

{{-- <body class="page teampg body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive">
    {{-- <a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a> --}} --}}

    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>

            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item post_item_single page hentry">
                            <section class="post_content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1452682058083">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="columns_wrap sc_columns columns_nofluid autoheight sc_columns_count_2">
                                                    <div class="column-1_2 sc_column_item">
                                                        <div class="sc_column_item_inner bgimage_column"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width"></div>
                                <div class="vc_row-full-width"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space space_95p">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div id="sc_team_296_wrap" class="sc_team_wrap type1">
                                                    <div id="sc_team_296" class="sc_team sc_team_style_team-1">
                                                        <h2 class="sc_team_title sc_item_title">Meet Our team</h2>
                                                        <div class="sc_team_descr sc_item_descr">با تیم پزشکان ما آشنا شوید</div>
                                                        <div class="sc_columns columns_wrap">
                                                            @foreach ($ourteam as $Ourteam )
                                                            <div class="column-1_4 column_padding_bottom">
                                                                <div id="sc_team_296_1" class="sc_team_item">
                                                                    <div class="sc_team_item_avatar">
                                                                        <img width="182" height="182" alt="Dr. Eleonore Grey" src="{{ Voyager::image($Ourteam->consultant->image) }}">
                                                                    </div>
                                                                    <div class="sc_team_item_info">
                                   <h5 class="sc_team_item_title">
   <a href="{{route('ourteam_single' , $Ourteam->slug)}}" >{{ $Ourteam->consultant->name}}</a>
    </h5>
    <div>  <a href="#" class="sc_team_item_position"> {{config('enum.ourteam')[$Ourteam->consultant->specialization] }}
                                                </a>
                                            </div>
  <div class="sc_team_item_description">{!! $Ourteam->shortdescription !!}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space space_70p">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </article>
                        <section class="related_wrap related_wrap_empty"></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if (count($ourteam)<1)
<h2>
    There is NO Docter Yet!
</h2>

@endif
</body>

</html>
@endsection
