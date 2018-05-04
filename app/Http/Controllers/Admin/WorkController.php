<?php

namespace App\Http\Controllers\Admin;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class WorkController extends Controller
{
    public function listSlides () {
        $works = Work::all();
        return view('admin.slider.works', compact('works'));
    }

    public function update (Work $work, Request $request) {
        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);
            $work->image = $filename;
            $work->update();
        }

        $work->update();

        Session::flash('success', 'Successfully updated');
        return back();
    }

    public function delete (Work $work) {
        $work->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }

    public function add ( Request $request) {

        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        }

        $work = new Work;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $work->image = $filename;

        $work->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }
}
