@extends('client.layout.layout')
@section('content')


    <!-- Page title -->
    <div class="page-title parallax parallax4">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Xəritə</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="index.html">Ana səhifə</a></li>
                            <li>Xəritə</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="flat-row page-contact">
        <div class="container">
            <div class="wrap-formcontact">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="info-box text-center">
                            <ul>
                                <li><i class="fa fa-map-marker"></i><a href="#">Azerbaijan, Baku</a></li>
                                <li><i class="fa fa-phone"></i><a href="#">051 555 55 55</a></li>
                                <li><i class="fa fa-envelope"></i><a href="#">info@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="margin-left_12">
                            <form id="contactform" class="contactform style4 clearfix" method="post" action="">
                              <span class="flat-input">
                                 <input name="name" id="name" type="text" placeholder="Ad" required="required">
                              </span>
                                <span class="flat-input">
                                 <input name="email" id="email" type="email" placeholder="Email" required="required">
                              </span>
                                <span class="flat-input">
                                 <textarea name="message" placeholder="Mesaj" required="required"></textarea>
                              </span>
                                <span class="flat-input">
                                 <button name="submit" type="submit" class="flat-button" id="submit" title="Send">Göndər</button>
                              </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection