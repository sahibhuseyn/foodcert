<?php

namespace App\Http\Controllers\Admin;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PartnerController extends Controller
{
    public function listSlides () {
        $partners = Partner::all();
        return view('admin.slider.partners', compact('partners'));
    }

    public function update (Partner $partner, Request $request) {
        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);
            $partner->image = $filename;
            $partner->update();
        }

        $partner->update();

        Session::flash('success', 'Successfully updated');
        return back();
    }

    public function delete (Partner $partner) {
        $partner->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }

    public function add ( Request $request) {

        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        }

        $partner = new Partner;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $partner->image = $filename;

        $partner->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }
}
