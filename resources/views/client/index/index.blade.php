@extends('client.layout.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('/client/revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('/client/revolution/css/settings.css') }}">

@endsection
@section('content')

    @include('client.layout.partials.slider')


    <section class="flat-row section-iconbox">
        <div class="container">
            <div class="row effect-animation " data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                <div class="col-lg-5">
                    <div class="title-section style3 left">
                        <h1 class="title">@lang('index.service')</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 effect-animation" data-animation="fadeInUp" data-animation-delay="{{ rand(0.2,1) }}s" data-animation-offset="75%">
                        <div class="iconbox style3">
                            <div class="box-content">
                                <h5 class="box-title">{{ $service->title }}</h5>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="flat-row v4 bg-section effect-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
        <div class="container">
            <div class="row">
                <div class="col-md-6 reponsive-onehalf">
                    <div class="title-section style2 left">
                        <h1 class="title">@lang('index.works')</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-imagebox flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="false">
            @foreach($works as $work)
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ url('/uploads/'.$work->image) }}" alt="image"></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="flat-row section-testimonials2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <div class="symbol"></div>
                        <h1 class="cd-headline clip is-full-width">
                           <span class="cd-words-wrapper">
                              <b class="is-visible">@lang('index.client')</b>
                              <b>@lang('index.client_satisfied')</b>
                           </span>
                        </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="wrap-testimonial padding-lr79">
                        <div id="testimonial-slider">
                            <ul class="slides">
                                @foreach($testimonials as $testimonial)
                                    <li>
                                        <div class="testimonials style3 text-center">
                                            <div class="message">
                                                <blockquote class="whisper">
                                                    {{ $testimonial->feedback }}
                                                </blockquote>
                                            </div>
                                            <div class="avatar">
                                                <span class="name">{{ $testimonial->name }}</span><br>
                                                <span class="position">{{ $testimonial->position }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="testimonial-carousel">
                            <ul class="slides clearfix">
                                @foreach($testimonials as $testimonial)
                                    <li>
                                        <img alt="image" src="{{ url('/uploads/'.$testimonial->image) }}">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row v6 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 effect-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                    <div class="title-section text-center">
                        <h1 class="title">@lang('index.news')</h1>
                    </div>
                </div>
            </div>
            <div class="blog-carosuel-wrap">
                <div class="blog-shortcode post-grid" >
                    @foreach($news as $item)
                        <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.{{ rand(1,7) }}s" data-animation-offset="75%">
                            <div class="entry-border clearfix">
                                <div class="featured-post">
                                    <a href="services-details.html"> <img src="{{ url('/uploads/'.$item->image) }}" alt="image"></a>
                                </div>
                                <div class="content-post">
                                    <h2 class="title-post"><a href="services-details.html">{{ $item->title }}</a></h2>
                                    <div class="meta-data style2 clearfix">
                                        <ul class="meta-post clearfix">
                                            <li class="day-time">
                                                <span>{{ $item->created_at->formatLocalized('%d %B %Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row section-client bg-section effect-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-client" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                        @foreach($partners as $partner)
                            <div class="client"><img src="{{ url('/uploads/'.$partner->image) }}" alt="image"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('script')
    <!-- Revolution Slider -->
    <script src="{{ url('client/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/slider.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.carousel.min.j') }}s"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('client/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
@endsection