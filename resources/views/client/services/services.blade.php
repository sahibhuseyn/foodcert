@extends('client.layout.layout')
@section('content')

    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">@lang('navbar.service')</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="{{ route('index') }}">@lang('navbar.home')</a></li>
                            <li>@lang('navbar.service')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section class="flat-row section-iconbox padding2 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title-section style3 left">
                        <h1 class="title">Xidmətlərimiz</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 effect-animation" data-animation="fadeInUp" data-animation-delay="0.{{ rand(2,6) }}s" data-animation-offset="75%">
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
        </div>
    </section>

@endsection