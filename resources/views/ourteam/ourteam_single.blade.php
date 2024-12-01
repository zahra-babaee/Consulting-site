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
<head>
    <title> {$ourteam->name}Dentario</title>
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/animations.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/fontello/css/fontello.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.animation.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/shortcodes.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom-style.css')}}"/>
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.responsive.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom.css')}}"/>
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.messages.css')}}"/>

</head>
<body>
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
                    <div class="page-nav no-margin row">
                <div class="content_wrap">
                    <h1 class="page_title">{{$ourteam->consultant->name}}</h1>
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="/">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <a class="breadcrumbs_item cat_post" href="/ourteam">Team</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">{{$ourteam->consultant->name}}</span>
                    </div>
                </div>
        </div>

            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item post_item_single_team post_featured_right team has-post-thumbnail hentry">
                            <section class="post_content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1452782452156">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="columns_wrap sc_columns columns_nofluid autoheight sc_columns_count_2">
                                                    <div class="column-1_2 sc_column_item">
                                                        <img width="770" height="434" alt="Image Post" src="{{ Voyager::image($ourteam->consultant->image) }}">
                                                    </div>
                                                    <div class="column-1_2 sc_column_item">
                                                        <h2 dir="rtl" align="right">{{$ourteam->consultant->name}}</h2>
                                                        <h3 class="vc_custom_heading vc_custom_1455113405644" dir="rtl" align="right">{{config('enum.ourteam') [$ourteam->consultant->specialization] }}</h3>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper"dir="rtl" align="right">
                                                                <p>{!! $ourteam->description !!}</p>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space space_50p">
                                                            <span class="vc_empty_space_inner"></span>
                                                        </div>
                                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_small margin_bottom_small">
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_twitter">
                                                                    <span class="icon-twitter"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_facebook">
                                                                    <span class="icon-facebook"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_gplus">
                                                                    <span class="icon-gplus"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_pinterest">
                                                                    <span class="icon-pinterest"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space space_30p">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="vc_empty_space space_60p">
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



    <div class="custom_html_section"></div>

</body>

</html>
@endsection
