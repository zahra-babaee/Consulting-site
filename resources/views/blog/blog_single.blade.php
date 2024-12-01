@extends('index')
@section('content')

<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="assets/blog/assets/image/x-icon" href="assets/blog/assets/images/favicon.png" />
    <title>Blog &#8211; Saliz</title>

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="blog/assets/https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Lora:400,400i,700,700i|Merriweather:300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:300,400,500,600,700|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">


    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/animations.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/fontello/css/fontello.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/style.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.animation.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/shortcodes.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom-style.css')}}"/>
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/skin.responsive.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/custom.css')}}"/>
    <link rel='stylesheet' href="{{asset('assets/blog/assets/css/core.messages.css')}}"/>
</head>

<body>

{{-- <body class="postpg body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right sidebar_outer_hide vc_responsive">
    <a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a> --}}
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>



            <div class="page-nav no-margin row">
                    <div class="content_wrap">
                        <h1 class="page_title" dir="rtl" align="right">{{ $blogs->title}}</h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="localhost:8000/index">Home</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <a class="breadcrumbs_item cat_post" href="localhost:8000/blog">Blog</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current" dir="rtl" align="right">{{ $blogs->title}}</span>
                        </div>
                    </div>
            </div>
            <div class="page_content_wrap page_paddings_yes" >
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item post_item_single post hentry">
                            <div class="post_info post_info_top">
                                <span class="post_info_item post_info_posted">
                                    <a href="localhost:8000/blog_single" class="post_info_date date updated" content="2015-05-05 09:55:42">{{$blogs->created_at}}</a>
                                </span>
                                <span class="post_info_item post_info_posted_by vcard">by
                                    <a href="localhost:8000/blog_single" class="post_info_author">{{$blogs->consultant->name}}</a>
                                </span>
                                <span class="post_info_item post_info_tags">in
                                    <a class="category_link" href="localhost:8000/blog">Blog</a>
                                </span>
                                <span class="post_info_item post_info_counters">
                                    <span class="post_counters_item post_counters_views icon-eye-light" title="Views - 2">
                                        <span class="post_counters_number">2</span>
                                    </span>
                                    </a>
                                </span>
                            </div>
                            <section class="post_content" dir="rtl" align="right">
                                <div class="post_featured">
                                    <div class="post_thumb" data-image="{{ Voyager::image($blogs->image) }}" data-title="Image Post">
                                        <a class="hover_icon hover_icon_link" href="localhost:8000/blog_single">
                                        <img width="770" height="434" alt="Image Post" src="{{ Voyager::image($blogs->image) }}">
                                        </a>
                                    </div>
                                </div>
                                <p dir="rtl" align="right">{!! $blogs->description !!}</p>
                            </section>
                            <section class="post_author author vcard">
                                <div class="post_author_avatar">
                                    <a href="localhost:8000/blog_single">
                                        <img alt='' src="{{ Voyager::image($blogs->consultant->image) }}" />
                                    </a>
                                </div>
                                <h6 class="post_author_title">
                                    <span class="post_author_name">
                                        <a href="localhost:8000/blog_single" class="fn">{{$blogs->consultant->name}}</a>
                                    </span>
                                    <span class="post_author_position"> {{config('enum.ourteam')[$blogs->consultant->specialization] }}</span>
                                </h6>
                                <div class="post_author_info"></div>
                            </section>
                            <section class="related_wrap related_wrap_empty"></section>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="custom_html_section">
    </div>

</body>

</html>
@endsection
