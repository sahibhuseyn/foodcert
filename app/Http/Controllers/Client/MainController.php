<?php

namespace App\Http\Controllers\Client;

use App\News;
use App\Partner;
use App\Service;
use App\Slider;
use App\Testimonial;
use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index () {

        $language = session('language');
        $testimonials = Testimonial::getTestimonial($language);
        $sliders = Slider::all();
        $partners = Partner::all();
        $services = Service::getService($language);
        $works = Work::all();
        $news = News::getPostsDesc($language);

        return view('client.index.index', compact("services", "partners", "testimonials", "news", "works", "sliders"));
    }
    public function map(){
        return view('client.address.map');
    }
    public function appeal(){
        return view('client.address.appeal');
    }
    public function address(){
        return view('client.address.address');
    }
    public function about(){
        return view('client.about.about');
    }

    public function service(){
        $language = session('language');
        $services = Service::getServiceByLanguageCode($language);
        return view('client.services.services', compact('services'));
    }
}
