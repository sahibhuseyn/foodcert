<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $posts = News::getPostsByLanguageCode($language_code);
//        $types = Type::getTypesByLanguage($language_code);

        return view('admin.posts.posts', compact('posts', 'language_id'));
    }

    public function add ($language_id, Request $request) {
        $slug = str_slug($request->title);
        $exists = News::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Post with the same name already exists');

            return back();
        }

        if (!$request->image) {
            Session::flash('fail', 'Please upload an image');

            return back();
        }

        $post = new News;
        $post->language_id = $language_id;
        $post->slug = $slug;
        $post->title = $request->title;
        $post->short_description = $request->short_description;
        $post->description = $request->description;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $post->image = $filename;

        $post->save();
        Session::flash('success', 'Successfully added');

        return back();
    }

    public function edit (News $post) {
        return view('admin.posts.edit', compact('post'));
    }

    public function update (News $post, Request $request) {
        $slug = str_slug($request->title);
        $exists = News::getPostBySlug($slug);

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $post->image = $filename;
        }

        if (!$exists) {
            $post->title = $request->title;
            $post->slug = $slug;
            $post->short_description = $request->short_description;
            $post->description = $request->description;
            $post->update();

        } else {
            if ($exists->id == $post->id) {
                $post->title = $request->title;
                $post->slug = $slug;
                $post->short_description = $request->short_description;
                $post->description = $request->description;
                $post->update();

            } else if ($exists) {
                Session::flash('fail', 'Post with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');
        return back();
    }

    public function delete (News $post) {
        $post ->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
