@extends('client.layout.layout')
@section('content')

    <!-- Page 404 -->
    <section class="flat-row section-404">
        <div class="container">
            <div class="page-404 text-center">
                <div class="number">
                    404
                </div>
                <div class="title-section style2 color-white text-center">
                    <h1 class="title">Axtardığınız Səhifə Tapılmadı!</h1>
                </div>
                <div class="btn-404">
                    <a href="{{ route('index') }}" class="flat-button"><i class="fa fa-long-arrow-left"></i>Ana Səhİfə</a>
                </div>
            </div>
        </div>
    </section>

@endsection