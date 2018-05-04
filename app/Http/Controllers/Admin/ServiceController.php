<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $services = Service::getServiceByLanguageCode($language_code);

        return view('admin.service.services', compact('services', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->title ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $service = new Service();
        $service->language_id = $request->language_id;
        $service->title = $request->title;
        $service->description = $request->description;


        $service->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Service $service, Request $request) {
        if (!$request->title) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Service $service) {
        $service->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
