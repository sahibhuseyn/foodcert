@extends('client.layout.layout')
@section('content')
    <section class="section-aboutus wrap-blance blancejqurey bg-section2 clearfix">
        <div id="blance1" class="featured-aboutus float-left">
            <img src="{{ url('/client/images/services/about.jpg') }}" alt="image">
        </div>
        <div id="blance2" class="info-aboutus float-left">
            <div class="title-section style2 left">
                <h1 class="title"><span>Haqqımızda</span></h1>
                <div class="sub-title">
                    <p>{!! wordwrap(trans('about_us.about'), 167, "<br/>")  !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection