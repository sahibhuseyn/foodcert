@extends('client.layout.layout')
@section('content')

    <!-- Page title -->
    <div class="page-title parallax parallax4">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Xəbərlər</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="index.html">Ana səhifə</a></li>
                            <li>Xəbərlər</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs -->
    <section class="flat-row blog-grid">
        <div class="container">
            <div class="post-wrap post-grid wrap-column clearfix">
                @foreach($posts as $post)
                    <article class="entry border-shadow flat-column3 clearfix">
                    <div class="entry-border clearfix">
                        <div class="featured-post">
                            <a href="{{ route('post_single', $post->slug) }}"> <img src="{{ url('/uploads/'.$post->image) }}" alt="image"></a>
                        </div>
                        <div class="content-post">
                            <h2 class="title-post"><a href="{{ route('post_single', $post->slug) }}">{{ $post->title }}</a></h2>
                            <div class="meta-data style2 clearfix">
                                <ul class="meta-post clearfix">
                                    <li class="day-time">
                                        <span>{{ $post->created_at->formatLocalized('%d %b %Y') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="blog-pagination clearfix">
                <ul class="flat-pagination  float-left clearfix">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>

        </div>
    </section>

@endsection