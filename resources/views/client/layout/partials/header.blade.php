<div class="boxed">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 reponsive-onehalf">
                    <p class="info-text">Qida Təhlükəsizliyində Yeni Yanaşma</p>
                </div>
                <div class="col-lg-6 col-sm-6 reponsive-onehalf">
                    <div class="wrap-top">
                        <ul class="flat-top social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flat-header-wrap">
        <div class="header widget-header clearfix">
            <div class="container">
                <div class="header-wrap clearfix">
                    <div class="row">
                        <div class="col-lg-3">
                            <div id="logo" class="logo">
                                <a href="{{ route('index') }}" rel="home">
                                    <img src="{{ url('/client/images/foodcert_logo.png') }}" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrap-widget-header clearfix">
                                <aside class="widget widget-info">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="info-text">
                                            <h6>Baku, Azerbaijan</h6>
                                            <p>Address</p>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget-info">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-text">
                                            <h6>0515555555</h6>
                                            <p>info@gmail.com</p>
                                        </div>
                                    </div>
                                </aside>
                                <ul class="list-inline pull-right">
                                    @foreach($__FLANGUAGES__ as $language)
                                        <li><a href="{{ route('change_language', $language->code) }}"><img src="{{ url('/uploads/'. $language->image ) }}" alt="img"></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header header-classic header-style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-wrap-header">
                            <div class="nav-wrap clearfix">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li {{ Request::is('/') ? "class=active" : '' }}><a href="{{ route('index') }}">@lang('navbar.home')</a></li>
                                        <li {{ Request::is('/about') ? 'class="active"' : '' }}><a href="{{ route('about') }}">@lang('navbar.about')</a></li>
                                        <li {{ Request::is('/service') ? "class=active" : '' }}><a href="{{ route('service') }}">@lang('navbar.service')</a></li>
                                        <li {{ Request::is('/news') ? "class=active" : '' }}><a href="{{ route('news') }}">@lang('navbar.news')</a></li>
                                        <li><a href="#">@lang('navbar.standard')</a></li>
                                        <li>
                                            <a href="#">@lang('navbar.contact')</a>
                                            <ul class="submenu right">
                                                <li><a href="{{ route('map') }}">@lang('navbar.map')</a></li>
                                                <li><a href="{{ route('appeal') }}">@lang('navbar.apply')</a></li>
                                                <li><a href="{{ route('map') }}">@lang('navbar.address')</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="btn-menu">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>



