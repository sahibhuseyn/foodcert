@extends('client.layout.layout')
@section('content')

    <!-- Page title -->
    <div class="page-title parallax parallax5">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">{{ $post->title }}</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="{{ route('index') }}">@lang('navbar.home')</a></li>
                            <li>{{ $post->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog posts -->
    <section class="flat-row project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <img src="{{ url('/uploads/'.$post->image) }}" alt="image" class="img1">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="single-text1">
                            <h2 class="text-center">{{ $post->title }}</h2>
                            <p>{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection